<?php

namespace Affinity\Catalog;

use Psr\Http\Client\ClientInterface;
use Affinity\Core\Client\RawClient;
use Affinity\Catalog\Requests\ListCatalogItemsRequest;
use Affinity\Types\ListCatalogItemsResponse;
use Affinity\Exceptions\AffinityHealthException;
use Affinity\Exceptions\AffinityHealthApiException;
use Affinity\Core\Json\JsonSerializer;
use Affinity\Core\Types\Union;
use Affinity\Core\Json\JsonApiRequest;
use Affinity\Environments;
use Affinity\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Affinity\Catalog\Requests\ListPharmaciesRequest;
use Affinity\Types\ListPharmaciesResponse;
use Affinity\Catalog\Requests\ListShippingOptionsRequest;
use Affinity\Types\ListShippingOptionsResponseItem;
use Affinity\Core\Json\JsonDecoder;
use Affinity\Catalog\Requests\RetrievePrescribingOptionsRequest;
use Affinity\Types\RetrievePrescribingOptionsResponse;

class CatalogClient
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
     * Lists catalog items for the authenticated account and mode. Use view=medications for priced prescription groups with offer counts, pharmacy counts, and strengths; the default view=offers returns individual offers. Use relatedToCatalogItemId to find offers for the same medication and route. When practiceId is supplied, a practice price overrides the platform price and missing overrides inherit the platform price.
     *
     * @param ListCatalogItemsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ListCatalogItemsResponse
     * @throws AffinityHealthException
     * @throws AffinityHealthApiException
     */
    public function listCatalogItems(ListCatalogItemsRequest $request = new ListCatalogItemsRequest(), ?array $options = null): ?ListCatalogItemsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->view != null) {
            $query['view'] = $request->view;
        }
        if ($request->relatedToCatalogItemId != null) {
            $query['relatedToCatalogItemId'] = $request->relatedToCatalogItemId;
        }
        if ($request->catalogKind != null) {
            $query['catalogKind'] = $request->catalogKind;
        }
        if ($request->sort != null) {
            $query['sort'] = $request->sort;
        }
        if ($request->catalogItemId != null) {
            $query['catalogItemId'] = $request->catalogItemId;
        }
        if ($request->availability != null) {
            $query['availability'] = $request->availability;
        }
        if ($request->pharmacyIds != null) {
            $query['pharmacyIds'] = JsonSerializer::serializeUnion($request->pharmacyIds, new Union('string', ['string']));
        }
        if ($request->dosageForms != null) {
            $query['dosageForms'] = JsonSerializer::serializeUnion($request->dosageForms, new Union('string', ['string']));
        }
        if ($request->endingBefore != null) {
            $query['endingBefore'] = $request->endingBefore;
        }
        if ($request->hideControlledSubstances != null) {
            $query['hideControlledSubstances'] = $request->hideControlledSubstances;
        }
        if ($request->hideUnpriced != null) {
            $query['hideUnpriced'] = $request->hideUnpriced;
        }
        if ($request->limit != null) {
            $query['limit'] = $request->limit;
        }
        if ($request->orgId != null) {
            $query['orgId'] = $request->orgId;
        }
        if ($request->practiceId != null) {
            $query['practiceId'] = $request->practiceId;
        }
        if ($request->query != null) {
            $query['query'] = $request->query;
        }
        if ($request->requirement != null) {
            $query['requirement'] = $request->requirement;
        }
        if ($request->routes != null) {
            $query['routes'] = JsonSerializer::serializeUnion($request->routes, new Union('string', ['string']));
        }
        if ($request->startingAfter != null) {
            $query['startingAfter'] = $request->startingAfter;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/catalog/items",
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
                return ListCatalogItemsResponse::fromJson($json);
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

    /**
     * Lists pharmacies available to the authenticated account, including approved invite-only relationships.
     *
     * @param ListPharmaciesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ListPharmaciesResponse
     * @throws AffinityHealthException
     * @throws AffinityHealthApiException
     */
    public function listPharmacies(ListPharmaciesRequest $request = new ListPharmaciesRequest(), ?array $options = null): ?ListPharmaciesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->endingBefore != null) {
            $query['endingBefore'] = $request->endingBefore;
        }
        if ($request->limit != null) {
            $query['limit'] = $request->limit;
        }
        if ($request->orgId != null) {
            $query['orgId'] = $request->orgId;
        }
        if ($request->pharmacyId != null) {
            $query['pharmacyId'] = $request->pharmacyId;
        }
        if ($request->query != null) {
            $query['query'] = $request->query;
        }
        if ($request->shipsToState != null) {
            $query['shipsToState'] = $request->shipsToState;
        }
        if ($request->startingAfter != null) {
            $query['startingAfter'] = $request->startingAfter;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/pharmacies",
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
                return ListPharmaciesResponse::fromJson($json);
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

    /**
     * Returns an array of at most 50 reviewed shipping services eligible for a catalog item, destination, and API mode. destinationState must be a USPS state or territory code. Each option has one temperature; pharmacy catalog summaries list all supported temperatures.
     *
     * @param string $catalogItemId
     * @param ListShippingOptionsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?array<ListShippingOptionsResponseItem>
     * @throws AffinityHealthException
     * @throws AffinityHealthApiException
     */
    public function listShippingOptions(string $catalogItemId, ListShippingOptionsRequest $request, ?array $options = null): ?array
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['destinationState'] = $request->destinationState;
        if ($request->destinationType != null) {
            $query['destinationType'] = $request->destinationType;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/catalog/items/{$catalogItemId}/shipping-options",
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
                return JsonDecoder::decodeArray($json, [ListShippingOptionsResponseItem::class]); // @phpstan-ignore-line
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

    /**
     * Requires catalog:read. Returns reviewed SIG presets, guided patterns, quantity constraints and product requirements for a practice and mode. Revisions identify changed defaults. No patient-specific rationale or diagnosis is inferred.
     *
     * @param string $catalogItemId
     * @param RetrievePrescribingOptionsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?RetrievePrescribingOptionsResponse
     * @throws AffinityHealthException
     * @throws AffinityHealthApiException
     */
    public function retrievePrescribingOptions(string $catalogItemId, RetrievePrescribingOptionsRequest $request, ?array $options = null): ?RetrievePrescribingOptionsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['practiceId'] = $request->practiceId;
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/catalog/items/{$catalogItemId}/prescribing-options",
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
                return RetrievePrescribingOptionsResponse::fromJson($json);
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
