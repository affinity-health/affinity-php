<?php

namespace Affinity\Patients\Addresses;

use Psr\Http\Client\ClientInterface;
use Affinity\Core\Client\RawClient;
use Affinity\Patients\Addresses\Requests\ListAddressesRequest;
use Affinity\Types\ListPatientAddressesResponse;
use Affinity\Exceptions\AffinityHealthException;
use Affinity\Exceptions\AffinityHealthApiException;
use Affinity\Core\Json\JsonApiRequest;
use Affinity\Environments;
use Affinity\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Affinity\Patients\Addresses\Requests\CreatePatientAddressRequest;
use Affinity\Types\CreatePatientAddressResponse;
use Affinity\Patients\Addresses\Requests\ArchiveAddressesRequest;
use Affinity\Types\ArchivePatientAddressResponse;
use Affinity\Patients\Addresses\Requests\UpdatePatientAddressRequest;
use Affinity\Types\UpdatePatientAddressResponse;
use Affinity\Patients\Addresses\Requests\SetDefaultAddressesRequest;
use Affinity\Types\SetDefaultPatientAddressResponse;

class AddressesClient
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
     * @param string $practiceId
     * @param string $patientId
     * @param ListAddressesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ListPatientAddressesResponse
     * @throws AffinityHealthException
     * @throws AffinityHealthApiException
     */
    public function list(string $practiceId, string $patientId, ListAddressesRequest $request = new ListAddressesRequest(), ?array $options = null): ?ListPatientAddressesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->status != null) {
            $query['status'] = $request->status;
        }
        if ($request->startingAfter != null) {
            $query['startingAfter'] = $request->startingAfter;
        }
        if ($request->endingBefore != null) {
            $query['endingBefore'] = $request->endingBefore;
        }
        if ($request->limit != null) {
            $query['limit'] = $request->limit;
        }
        $headers = [];
        if ($request->affinityActorId != null) {
            $headers['Affinity-Actor-Id'] = $request->affinityActorId;
        }
        if ($request->affinityActorType != null) {
            $headers['Affinity-Actor-Type'] = $request->affinityActorType;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/practices/{$practiceId}/patients/{$patientId}/addresses",
                    method: HttpMethod::GET,
                    headers: $headers,
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
                return ListPatientAddressesResponse::fromJson($json);
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
     * Returns the existing active address for a normalized duplicate. The first address becomes the default. API keys require Idempotency-Key.
     *
     * @param string $practiceId
     * @param string $patientId
     * @param CreatePatientAddressRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CreatePatientAddressResponse
     * @throws AffinityHealthException
     * @throws AffinityHealthApiException
     */
    public function create(string $practiceId, string $patientId, CreatePatientAddressRequest $request, ?array $options = null): ?CreatePatientAddressResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $headers = [];
        $headers['Idempotency-Key'] = $request->idempotencyKey ?? bin2hex(random_bytes(16)); // affinity-sdk-auto-key
        if ($request->affinityActorId != null) {
            $headers['Affinity-Actor-Id'] = $request->affinityActorId;
        }
        if ($request->affinityActorType != null) {
            $headers['Affinity-Actor-Type'] = $request->affinityActorType;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/practices/{$practiceId}/patients/{$patientId}/addresses",
                    method: HttpMethod::POST,
                    headers: $headers,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return CreatePatientAddressResponse::fromJson($json);
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
     * Preserves the address ID and history. Archiving the default selects the oldest remaining active address. Existing orders remain unchanged.
     *
     * @param string $practiceId
     * @param string $patientId
     * @param string $addressId
     * @param ArchiveAddressesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ArchivePatientAddressResponse
     * @throws AffinityHealthException
     * @throws AffinityHealthApiException
     */
    public function archive(string $practiceId, string $patientId, string $addressId, ArchiveAddressesRequest $request = new ArchiveAddressesRequest(), ?array $options = null): ?ArchivePatientAddressResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $headers = [];
        $headers['Idempotency-Key'] = $request->idempotencyKey ?? bin2hex(random_bytes(16)); // affinity-sdk-auto-key
        if ($request->affinityActorId != null) {
            $headers['Affinity-Actor-Id'] = $request->affinityActorId;
        }
        if ($request->affinityActorType != null) {
            $headers['Affinity-Actor-Type'] = $request->affinityActorType;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/practices/{$practiceId}/patients/{$patientId}/addresses/{$addressId}",
                    method: HttpMethod::DELETE,
                    headers: $headers,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return ArchivePatientAddressResponse::fromJson($json);
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
     * @param string $practiceId
     * @param string $patientId
     * @param string $addressId
     * @param UpdatePatientAddressRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?UpdatePatientAddressResponse
     * @throws AffinityHealthException
     * @throws AffinityHealthApiException
     */
    public function update(string $practiceId, string $patientId, string $addressId, UpdatePatientAddressRequest $request = new UpdatePatientAddressRequest(), ?array $options = null): ?UpdatePatientAddressResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $headers = [];
        $headers['Idempotency-Key'] = $request->idempotencyKey ?? bin2hex(random_bytes(16)); // affinity-sdk-auto-key
        if ($request->affinityActorId != null) {
            $headers['Affinity-Actor-Id'] = $request->affinityActorId;
        }
        if ($request->affinityActorType != null) {
            $headers['Affinity-Actor-Type'] = $request->affinityActorType;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/practices/{$practiceId}/patients/{$patientId}/addresses/{$addressId}",
                    method: HttpMethod::PATCH,
                    headers: $headers,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return UpdatePatientAddressResponse::fromJson($json);
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
     * Changes delivery selection for future drafts, without changing patient clinical location or existing signed orders.
     *
     * @param string $practiceId
     * @param string $patientId
     * @param string $addressId
     * @param SetDefaultAddressesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SetDefaultPatientAddressResponse
     * @throws AffinityHealthException
     * @throws AffinityHealthApiException
     */
    public function setDefault(string $practiceId, string $patientId, string $addressId, SetDefaultAddressesRequest $request = new SetDefaultAddressesRequest(), ?array $options = null): ?SetDefaultPatientAddressResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $headers = [];
        $headers['Idempotency-Key'] = $request->idempotencyKey ?? bin2hex(random_bytes(16)); // affinity-sdk-auto-key
        if ($request->affinityActorId != null) {
            $headers['Affinity-Actor-Id'] = $request->affinityActorId;
        }
        if ($request->affinityActorType != null) {
            $headers['Affinity-Actor-Type'] = $request->affinityActorType;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/practices/{$practiceId}/patients/{$patientId}/addresses/{$addressId}/default",
                    method: HttpMethod::PUT,
                    headers: $headers,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return SetDefaultPatientAddressResponse::fromJson($json);
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
