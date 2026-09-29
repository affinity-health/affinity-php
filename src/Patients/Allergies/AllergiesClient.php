<?php

namespace Affinity\Patients\Allergies;

use Psr\Http\Client\ClientInterface;
use Affinity\Core\Client\RawClient;
use Affinity\Patients\Allergies\Requests\GetAllergiesRequest;
use Affinity\Types\GetPatientAllergiesResponse;
use Affinity\Exceptions\AffinityHealthException;
use Affinity\Exceptions\AffinityHealthApiException;
use Affinity\Core\Json\JsonApiRequest;
use Affinity\Environments;
use Affinity\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Affinity\Patients\Allergies\Requests\ReplacePatientAllergiesRequest;
use Affinity\Types\ReplacePatientAllergiesResponse;

class AllergiesClient
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
     * Returns the patient's structured allergy entries and review status. A not_reviewed status is not a no-known-allergies assertion and blocks clinical review and signing.
     *
     * @param string $practiceId
     * @param string $patientId
     * @param GetAllergiesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetPatientAllergiesResponse
     * @throws AffinityHealthException
     * @throws AffinityHealthApiException
     */
    public function get(string $practiceId, string $patientId, GetAllergiesRequest $request = new GetAllergiesRequest(), ?array $options = null): ?GetPatientAllergiesResponse
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
                    path: "v1/practices/{$practiceId}/patients/{$patientId}/allergies",
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
                return GetPatientAllergiesResponse::fromJson($json);
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
     * Replaces the patient's structured allergy record. Sending no_known is the explicit no-known-allergies acknowledgement; recorded requires at least one entry. Idempotency-Key is required.
     *
     * @param string $practiceId
     * @param string $patientId
     * @param ReplacePatientAllergiesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ReplacePatientAllergiesResponse
     * @throws AffinityHealthException
     * @throws AffinityHealthApiException
     */
    public function replace(string $practiceId, string $patientId, ReplacePatientAllergiesRequest $request, ?array $options = null): ?ReplacePatientAllergiesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $headers = [];
        $headers['Idempotency-Key'] = $request->idempotencyKey;
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
                    path: "v1/practices/{$practiceId}/patients/{$patientId}/allergies",
                    method: HttpMethod::PUT,
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
                return ReplacePatientAllergiesResponse::fromJson($json);
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
