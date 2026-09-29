<?php

namespace Affinity\Team\Prescribers;

use Affinity\Team\Prescribers\Licenses\LicensesClient;
use Psr\Http\Client\ClientInterface;
use Affinity\Core\Client\RawClient;
use Affinity\Team\Prescribers\Requests\ListPrescribersRequest;
use Affinity\Types\ListPracticeTeamPrescribersResponse;
use Affinity\Exceptions\AffinityHealthException;
use Affinity\Exceptions\AffinityHealthApiException;
use Affinity\Core\Json\JsonApiRequest;
use Affinity\Environments;
use Affinity\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Affinity\Types\GetPracticeTeamPrescriberResponse;
use Affinity\Team\Prescribers\Requests\UpdatePracticeTeamPrescriberRequest;
use Affinity\Types\UpdatePracticeTeamPrescriberResponse;

class PrescribersClient
{
    /**
     * @var LicensesClient $licenses
     */
    public LicensesClient $licenses;

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
        $this->licenses = new LicensesClient($this->client, $this->options);
    }

    /**
     * Requires team:read. Filter practice prescribers by name, NPI, state, and practice status. Records include submitted licenses and their IDs. Signing authority also requires an active account connection, Live practice access, and prescription eligibility.
     *
     * @param string $practiceId
     * @param ListPrescribersRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ListPracticeTeamPrescribersResponse
     * @throws AffinityHealthException
     * @throws AffinityHealthApiException
     */
    public function list(string $practiceId, ListPrescribersRequest $request = new ListPrescribersRequest(), ?array $options = null): ?ListPracticeTeamPrescribersResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->limit != null) {
            $query['limit'] = $request->limit;
        }
        if ($request->startingAfter != null) {
            $query['startingAfter'] = $request->startingAfter;
        }
        if ($request->endingBefore != null) {
            $query['endingBefore'] = $request->endingBefore;
        }
        if ($request->search != null) {
            $query['search'] = $request->search;
        }
        if ($request->npi != null) {
            $query['npi'] = $request->npi;
        }
        if ($request->state != null) {
            $query['state'] = $request->state;
        }
        if ($request->status != null) {
            $query['status'] = $request->status;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/practices/{$practiceId}/team/prescribers",
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
                return ListPracticeTeamPrescribersResponse::fromJson($json);
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
     * Requires team:read. Returns the clinical profile and submitted licenses, including license IDs. This is setup information, not a signing authorization.
     *
     * @param string $practiceId
     * @param string $prescriberId
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetPracticeTeamPrescriberResponse
     * @throws AffinityHealthException
     * @throws AffinityHealthApiException
     */
    public function get(string $practiceId, string $prescriberId, ?array $options = null): ?GetPracticeTeamPrescriberResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/practices/{$practiceId}/team/prescribers/{$prescriberId}",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetPracticeTeamPrescriberResponse::fromJson($json);
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
     * Requires team:write. Set practiceStatus to inactive to remove prescribing access in this practice, or active to restore an existing association. This does not create membership or signing authority. Practice status applies to Test and Live. Shared identity and license edits require Affinity support.
     *
     * @param string $practiceId
     * @param string $prescriberId
     * @param UpdatePracticeTeamPrescriberRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?UpdatePracticeTeamPrescriberResponse
     * @throws AffinityHealthException
     * @throws AffinityHealthApiException
     */
    public function update(string $practiceId, string $prescriberId, UpdatePracticeTeamPrescriberRequest $request = new UpdatePracticeTeamPrescriberRequest(), ?array $options = null): ?UpdatePracticeTeamPrescriberResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $headers = [];
        $headers['Idempotency-Key'] = $request->idempotencyKey ?? bin2hex(random_bytes(16)); // affinity-sdk-auto-key
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/practices/{$practiceId}/team/prescribers/{$prescriberId}",
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
                return UpdatePracticeTeamPrescriberResponse::fromJson($json);
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
