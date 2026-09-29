<?php
require __DIR__ . '/../vendor/autoload.php';

use Affinity\AffinityClient;
use Affinity\Orders\Requests\ListOrdersRequest;
use Affinity\Orders\Requests\CreateOrderRequest;
use Affinity\Exceptions\AffinityHealthApiException;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

function check(bool $value, string $message): void {
    if (!$value) throw new RuntimeException($message);
}

$transport = new class implements ClientInterface {
    public array $requests = [];
    public function sendRequest(RequestInterface $request): ResponseInterface {
        $this->requests[] = $request;
        if ($request->getMethod() === 'POST') {
            return new Response(422, ['Content-Type' => 'application/problem+json'], json_encode([
                'type' => 'about:blank', 'title' => 'Invalid request', 'status' => 422,
                'detail' => 'Synthetic validation failure', 'code' => 'VALIDATION_ERROR', 'instance' => '/v1/orders',
            ]));
        }
        return new Response(200, ['Content-Type' => 'application/json'],
            '{"object":"list","data":[],"hasMore":false,"url":"/v1/orders"}');
    }
};
$client = new AffinityClient(apiKey: 'synthetic-key', options: [
    'baseUrl' => 'https://sdk-test.invalid', 'client' => $transport, 'maxRetries' => 0,
]);
$page = $client->orders->list(new ListOrdersRequest(['startingAfter' => 'ord_cursor', 'limit' => 2,
    'affinityActorId' => 'user-synthetic', 'affinityActorType' => 'user']));
$request = $transport->requests[0];
check($request->getUri()->getPath() === '/v1/orders', 'incorrect path');
check($request->getHeaderLine('x-affinity-api-key') === 'synthetic-key', 'incorrect auth');
check($request->getHeaderLine('Affinity-Version') === '2026-09-28', 'incorrect API version');
check($request->getHeaderLine('Affinity-Actor-Id') === 'user-synthetic', 'incorrect actor');
parse_str($request->getUri()->getQuery(), $query);
check($query['startingAfter'] === 'ord_cursor' && $query['limit'] === '2', 'incorrect query');
check($page->data === [] && $page->hasMore === false, 'incorrect response');
try {
    $client->orders->create(new CreateOrderRequest([
        'idempotencyKey' => 'stable-synthetic-key', 'practiceId' => 'prac_synthetic',
        'patientId' => 'pat_synthetic', 'prescriptions' => [],
    ]));
    throw new RuntimeException('expected API error');
} catch (AffinityHealthApiException $error) {
    check($error->getCode() === 422, 'incorrect error status');
}
$write = $transport->requests[1];
check($write->getHeaderLine('Idempotency-Key') === 'stable-synthetic-key', 'incorrect idempotency');
$body = json_decode((string) $write->getBody(), true);
check($body['practiceId'] === 'prac_synthetic' && $body['patientId'] === 'pat_synthetic', 'incorrect body');
echo "PHP request, response, and error checks passed.\n";
