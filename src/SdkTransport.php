<?php
namespace Affinity;

final class SdkTransport {
    private ?array $identity = null;
    private \GuzzleHttp\ClientInterface $http;
    public function __construct(private string $key, private array $config = []) {
        if (!trim($key)) throw new \InvalidArgumentException('An API key is required');
        if (($config['timeout'] ?? 60) <= 0 || ($config['maxRetries'] ?? 0) < 0 || ($config['maxRetries'] ?? 0) > 10) throw new \InvalidArgumentException('Invalid timeout or retry limit');
        $this->http = $config['client'] ?? new \GuzzleHttp\Client();
    }
    public function access(): array {
        if ($this->identity === null) {
            $result = $this->request('/v1/auth/access', 'GET', null, []);
            $subject = $result->serviceAccount ?? null;
            if (!is_string($subject->subjectId ?? null) || !is_string($subject->subjectType ?? null)) throw new \UnexpectedValueException('Invalid API key access response');
            $this->identity = (array) $subject;
        }
        return $this->identity;
    }
    public function request(string $path, string $method, ?array $body, array $headers): mixed {
        $payload = $body === null ? null : json_encode((object)$body, JSON_THROW_ON_ERROR);
        $retries = $method === 'GET' || isset($headers['Idempotency-Key']) ? ($this->config['maxRetries'] ?? 0) : 0;
        for ($attempt = 0; ; $attempt++) {
            $delay = 0.25 * (2 ** $attempt);
            try {
                $response = $this->http->request($method, rtrim($this->config['baseUrl'] ?? 'https://api.joinaffinityai.com', '/') . $path, [
                    'headers' => array_merge(['Authorization' => 'Bearer ' . $this->key, 'Affinity-Version' => '2026-09-28'], $headers, $body === null ? [] : ['Content-Type' => 'application/json']),
                    'body' => $payload, 'timeout' => $this->config['timeout'] ?? 60,
                    'http_errors' => false, 'allow_redirects' => false,
                ]);
                $status = $response->getStatusCode();
                $raw = (string)$response->getBody();
                if ($status >= 200 && $status < 300) return $raw === '' ? null : json_decode($raw, false, 512, JSON_THROW_ON_ERROR);
                $problem = json_decode($raw, true) ?? [];
                $retryAfter = $response->getHeaderLine('Retry-After');
                $seconds = is_numeric($retryAfter) ? max(0, (float)$retryAfter) : (($date = strtotime($retryAfter)) === false ? null : max(0, $date - time()));
                $error = new AffinityError($status, $problem['code'] ?? 'api_error', $problem['requestId'] ?? null, $seconds);
                if (!$error->retryable || $attempt >= $retries) throw $error;
                $delay = max($delay, $seconds ?? 0);
            } catch (\GuzzleHttp\Exception\TransferException $error) {
                if ($attempt >= $retries) throw $error;
            }
            usleep((int)(min(30, $delay) * 1_000_000));
        }
    }
}
final class SdkContext {
    public function __construct(public readonly SdkTransport $transport, public readonly ?string $practiceId = null) {}
    public function call(string $operation, array $ids, array $params = [], array $options = []): mixed {
        $op = SdkOperations::all()[$operation];
        if ($op['rootOnly'] && $this->practiceId !== null) throw new \InvalidArgumentException('Use the root client for platform-wide operations');
        if ($this->practiceId !== null && isset($options['practiceId']) && $this->practiceId !== $options['practiceId']) throw new \InvalidArgumentException('Conflicting practice ID');
        if (array_key_exists('practiceId', $params)) throw new \InvalidArgumentException('Pass practiceId in request options');
        if ($operation === "updatePatient" && ($params["status"] ?? null) === "archived") $params["status"] = "inactive";
        $key = $options['idempotencyKey'] ?? null;
        if ($key !== null && !trim($key)) throw new \InvalidArgumentException('idempotencyKey must not be empty');
        if ($op['idempotency'] === 'required' && $key === null) throw new \InvalidArgumentException('A persisted idempotencyKey is required');
        if ($op['idempotency'] === 'none' && $key !== null) throw new \InvalidArgumentException('This endpoint does not support idempotency keys');
        if ($op['idempotency'] === 'auto' && $key === null) $key = bin2hex(random_bytes(16));
        $practice = $options['practiceId'] ?? $this->practiceId;
        if ($op['practice'] !== 'none') {
            $subject = $this->transport->access();
            if ($subject['subjectType'] === 'practice') {
                if ($practice !== null && $practice !== $subject['subjectId']) throw new \InvalidArgumentException('Practice context conflicts with the API key');
                $practice = $subject['subjectId'];
            }
            if (!$practice) throw new \InvalidArgumentException('A platform key requires practiceId');
        } elseif (isset($options['practiceId'])) throw new \InvalidArgumentException('This endpoint does not accept practice context');
        $path = $op['path'];
        foreach ($op['ids'] as $index => $name) {
            if (!isset($ids[$index]) || !trim($ids[$index])) throw new \InvalidArgumentException('A resource ID is required');
            $path = str_replace('{' . $name . '}', rawurlencode($ids[$index]), $path);
        }
        if ($op['practice'] === 'path') $path = str_replace('{practiceId}', rawurlencode($practice), $path);
        if (in_array($op['practice'], ['body', 'query'], true)) $params['practiceId'] = $practice;
        if ($op['practice'] === 'order') {
            $order = $this->transport->request('/v1/orders/' . rawurlencode($ids[array_search('orderId', $op['ids'], true)]), 'GET', null, []);
            if ($order->practiceId !== $practice) throw new \InvalidArgumentException('Order does not belong to the selected practice');
            if ($operation === 'getOrder') return $order;
        }
        $query = [];
        foreach ($op['query'] as $name) if (array_key_exists($name, $params)) {
            if ($params[$name] !== null) $query[$name] = is_bool($params[$name]) ? ($params[$name] ? 'true' : 'false') : $params[$name];
            unset($params[$name]);
        }
        if ($query) $path .= '?' . http_build_query($query, '', '&', PHP_QUERY_RFC3986);
        $headers = [];
        foreach ($op['headers'] as $name => $header) if (isset($options[$name])) $headers[$header] = $options[$name];
        if ($key !== null) $headers['Idempotency-Key'] = $key;
        return $this->transport->request($path, $op['verb'], $op['body'] ? $params : null, $headers);
    }
    public function iterate(string $operation, array $ids, array $params, array $options): \Generator {
        if (isset($params['endingBefore'])) throw new \InvalidArgumentException('iterate supports forward pagination');
        while (true) {
            $page = $this->call($operation, $ids, $params, $options);
            foreach ($page->data as $item) yield $item;
            if (!$page->hasMore) return;
            $cursor = $page->data ? $page->data[array_key_last($page->data)]->id : null;
            if (!$cursor || $cursor === ($params['startingAfter'] ?? null)) throw new \UnexpectedValueException('Pagination did not advance');
            $params['startingAfter'] = $cursor;
        }
    }
}
