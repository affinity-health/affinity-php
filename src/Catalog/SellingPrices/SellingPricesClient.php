<?php

namespace Affinity\Catalog\SellingPrices;

use Psr\Http\Client\ClientInterface;
use Affinity\Core\Client\RawClient;
use Affinity\Catalog\SellingPrices\Requests\GetSellingPricesRequest;
use Affinity\Types\PlatformPublicApiSellingPricesReadSellingPriceResponse;
use Affinity\Exceptions\AffinityHealthException;
use Affinity\Exceptions\AffinityHealthApiException;
use Affinity\Core\Json\JsonApiRequest;
use Affinity\Environments;
use Affinity\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;

class SellingPricesClient
{
    /**
     * @var array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options @phpstan-ignore-next-line Property is used in endpoint methods via HttpEndpointGenerator
     */
    private array $options;

    /**
     * @var RawClient $client
     */
    private RawClient $client;

    /**
     * @param RawClient $client
     * @param ?array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options
     */
    public function __construct(
        RawClient $client,
        ?array $options = null,
    ) {
        $this->client = $client;
        $this->options = $options ?? [];
    }

    /**
     * Requires selling_prices:read. Reads the Affinity-managed purchase-price override inherited by this platform's practices unless Affinity sets a practice override. Use the practice-scoped catalog for effective practice prices and presentation-price when an Affinity default may be absent. Platforms cannot edit purchase prices.
     *
     * @param string $catalogItemId
     * @param GetSellingPricesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PlatformPublicApiSellingPricesReadSellingPriceResponse
     * @throws AffinityHealthException
     * @throws AffinityHealthApiException
     */
    public function get(string $catalogItemId, GetSellingPricesRequest $request = new GetSellingPricesRequest(), ?array $options = null): ?PlatformPublicApiSellingPricesReadSellingPriceResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->practiceId != null) {
            $query['practiceId'] = $request->practiceId;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/catalog/items/{$catalogItemId}/selling-price",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PlatformPublicApiSellingPricesReadSellingPriceResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new AffinityHealthException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new AffinityHealthException(message: $e->getMessage(), previous: $e);
        }
        throw new AffinityHealthApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }
}
