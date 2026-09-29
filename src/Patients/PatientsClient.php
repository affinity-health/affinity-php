<?php

namespace Affinity\Patients;

use Affinity\Patients\Addresses\AddressesClient;
use Affinity\Patients\Allergies\AllergiesClient;
use Psr\Http\Client\ClientInterface;
use Affinity\Core\Client\RawClient;
use Affinity\Patients\Requests\ListPatientsRequest;
use Affinity\Types\ListPatientsResponse;
use Affinity\Exceptions\AffinityHealthException;
use Affinity\Exceptions\AffinityHealthApiException;
use Affinity\Core\Json\JsonApiRequest;
use Affinity\Environments;
use Affinity\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Affinity\Patients\Requests\CreatePatientRequest;
use Affinity\Types\CreatePatientResponse;
use Affinity\Patients\Requests\GetPatientsRequest;
use Affinity\Types\GetPatientResponse;
use Affinity\Patients\Requests\DeletePatientsRequest;
use Affinity\Types\DeletePatientResponse;
use Affinity\Patients\Requests\UpdatePatientRequest;
use Affinity\Types\UpdatePatientResponse;

class PatientsClient
{
    /**
     * @var AddressesClient $addresses
     */
    public AddressesClient $addresses;

    /**
     * @var AllergiesClient $allergies
     */
    public AllergiesClient $allergies;

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
        $this->addresses = new AddressesClient($this->client, $this->options);
        $this->allergies = new AllergiesClient($this->client, $this->options);
    }

    /**
     * Lists patients in one practice and mode. Use externalId for an exact match in the calling integration's namespace. Use externalIdentitySource with externalIdentityValue to search an explicit alias. Identity matching is case-sensitive after trimming whitespace. Other filters also apply.
     *
     * @param string $practiceId
     * @param ListPatientsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ListPatientsResponse
     * @throws AffinityHealthException
     * @throws AffinityHealthApiException
     */
    public function list(string $practiceId, ListPatientsRequest $request = new ListPatientsRequest(), ?array $options = null): ?ListPatientsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->endingBefore != null) {
            $query['endingBefore'] = $request->endingBefore;
        }
        if ($request->externalId != null) {
            $query['externalId'] = $request->externalId;
        }
        if ($request->externalIdentitySource != null) {
            $query['externalIdentitySource'] = $request->externalIdentitySource;
        }
        if ($request->externalIdentityValue != null) {
            $query['externalIdentityValue'] = $request->externalIdentityValue;
        }
        if ($request->gender != null) {
            $query['gender'] = $request->gender;
        }
        if ($request->lastOrderAfter != null) {
            $query['lastOrderAfter'] = $request->lastOrderAfter;
        }
        if ($request->lastOrderBefore != null) {
            $query['lastOrderBefore'] = $request->lastOrderBefore;
        }
        if ($request->limit != null) {
            $query['limit'] = $request->limit;
        }
        if ($request->program != null) {
            $query['program'] = $request->program;
        }
        if ($request->query != null) {
            $query['query'] = $request->query;
        }
        if ($request->sort != null) {
            $query['sort'] = $request->sort;
        }
        if ($request->startingAfter != null) {
            $query['startingAfter'] = $request->startingAfter;
        }
        if ($request->states != null) {
            $query['states'] = $request->states;
        }
        if ($request->status != null) {
            $query['status'] = $request->status;
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
                    path: "v1/practices/{$practiceId}/patients",
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
                return ListPatientsResponse::fromJson($json);
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
     * Creates a patient or resolves a matching externalId or external identity within this practice and mode. externalId belongs to the calling integration; externalIdentities holds aliases from other systems. Resolution preserves existing demographics; use PATCH to update them. Conflicting identifiers return 409. Email never merges patients. API keys require Idempotency-Key.
     *
     * @param string $practiceId
     * @param CreatePatientRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CreatePatientResponse
     * @throws AffinityHealthException
     * @throws AffinityHealthApiException
     */
    public function create(string $practiceId, CreatePatientRequest $request, ?array $options = null): ?CreatePatientResponse
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
                    path: "v1/practices/{$practiceId}/patients",
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
                return CreatePatientResponse::fromJson($json);
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
     * Returns one patient in the authorized practice and mode.
     *
     * @param string $practiceId
     * @param string $patientId
     * @param GetPatientsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetPatientResponse
     * @throws AffinityHealthException
     * @throws AffinityHealthApiException
     */
    public function get(string $practiceId, string $patientId, GetPatientsRequest $request = new GetPatientsRequest(), ?array $options = null): ?GetPatientResponse
    {
        $options = array_merge($this->options, $options ?? []);
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
                    path: "v1/practices/{$practiceId}/patients/{$patientId}",
                    method: HttpMethod::GET,
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
                return GetPatientResponse::fromJson($json);
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
     * Requires patients:write and Idempotency-Key for API keys. Permanently deletes a patient with no order history. Any order history returns 409; use Update patient with status archived instead. Available to practice keys and authorized platform keys. Reusing the same idempotency key returns the original deletion result.
     *
     * @param string $practiceId
     * @param string $patientId
     * @param DeletePatientsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DeletePatientResponse
     * @throws AffinityHealthException
     * @throws AffinityHealthApiException
     */
    public function delete(string $practiceId, string $patientId, DeletePatientsRequest $request = new DeletePatientsRequest(), ?array $options = null): ?DeletePatientResponse
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
                    path: "v1/practices/{$practiceId}/patients/{$patientId}",
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
                return DeletePatientResponse::fromJson($json);
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
     * Updates a patient in the current practice and mode. Omitted fields remain unchanged; null clears an optional field. externalId updates the calling integration's identifier. externalIdentities replaces its explicit aliases. Identifiers cannot be reassigned from another patient. API keys require Idempotency-Key.
     *
     * @param string $practiceId
     * @param string $patientId
     * @param UpdatePatientRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?UpdatePatientResponse
     * @throws AffinityHealthException
     * @throws AffinityHealthApiException
     */
    public function update(string $practiceId, string $patientId, UpdatePatientRequest $request = new UpdatePatientRequest(), ?array $options = null): ?UpdatePatientResponse
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
                    path: "v1/practices/{$practiceId}/patients/{$patientId}",
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
                return UpdatePatientResponse::fromJson($json);
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
