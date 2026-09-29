<?php

namespace Affinity\Team\Members;

use Psr\Http\Client\ClientInterface;
use Affinity\Core\Client\RawClient;
use Affinity\Team\Members\Requests\ListMembersRequest;
use Affinity\Types\ListPracticeTeamMembersResponse;
use Affinity\Exceptions\AffinityHealthException;
use Affinity\Exceptions\AffinityHealthApiException;
use Affinity\Core\Json\JsonApiRequest;
use Affinity\Environments;
use Affinity\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Affinity\Types\GetPracticeTeamMemberResponse;
use Affinity\Team\Members\Requests\UpdatePracticeTeamMemberRequest;
use Affinity\Types\UpdatePracticeTeamMemberResponse;

class MembersClient
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
     * Requires team:read. Search the roster by name or email, and filter by role or membership status. Includes members invited in Clinic, location access, and account-specific prescriber connections. Memberships are shared between Test and Live.
     *
     * @param string $practiceId
     * @param ListMembersRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ListPracticeTeamMembersResponse
     * @throws AffinityHealthException
     * @throws AffinityHealthApiException
     */
    public function list(string $practiceId, ListMembersRequest $request = new ListMembersRequest(), ?array $options = null): ?ListPracticeTeamMembersResponse
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
        if ($request->role != null) {
            $query['role'] = $request->role;
        }
        if ($request->status != null) {
            $query['status'] = $request->status;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/practices/{$practiceId}/team/members",
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
                return ListPracticeTeamMembersResponse::fromJson($json);
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
     * Requires team:read. Returns current account membership, roles, location access, and prescriber connection. The member ID identifies practice access; it is not the integration user ID used by orders.
     *
     * @param string $practiceId
     * @param string $memberId
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetPracticeTeamMemberResponse
     * @throws AffinityHealthException
     * @throws AffinityHealthApiException
     */
    public function get(string $practiceId, string $memberId, ?array $options = null): ?GetPracticeTeamMemberResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/practices/{$practiceId}/team/members/{$memberId}",
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
                return GetPracticeTeamMemberResponse::fromJson($json);
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
     * Requires team:write. Supply role, status, or locationIds; omitted values stay unchanged. A role replaces existing roles. Disable access with status disabled. An empty locationIds array grants all practice locations. Ownership changes require an active practice owner using a personal API key; service keys manage non-owner memberships. The final active owner cannot be removed. Changes apply to both Test and Live. Sign-in email and account security remain account settings.
     *
     * @param string $practiceId
     * @param string $memberId
     * @param UpdatePracticeTeamMemberRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?UpdatePracticeTeamMemberResponse
     * @throws AffinityHealthException
     * @throws AffinityHealthApiException
     */
    public function update(string $practiceId, string $memberId, UpdatePracticeTeamMemberRequest $request = new UpdatePracticeTeamMemberRequest(), ?array $options = null): ?UpdatePracticeTeamMemberResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $headers = [];
        $headers['Idempotency-Key'] = $request->idempotencyKey ?? bin2hex(random_bytes(16)); // affinity-sdk-auto-key
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/practices/{$practiceId}/team/members/{$memberId}",
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
                return UpdatePracticeTeamMemberResponse::fromJson($json);
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
