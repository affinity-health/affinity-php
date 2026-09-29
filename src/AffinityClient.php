<?php

namespace Affinity;

use Affinity\Locations\LocationsClient;
use Affinity\ApiKeys\ApiKeysClient;
use Affinity\Account\AccountClient;
use Affinity\Pharmacies\PharmaciesClient;
use Affinity\Orders\OrdersClient;
use Affinity\Team\TeamClient;
use Affinity\Practices\PracticesClient;
use Affinity\Patients\PatientsClient;
use Affinity\Catalog\CatalogClient;
use Affinity\Webhooks\WebhooksClient;
use Psr\Http\Client\ClientInterface;
use Affinity\Core\Client\RawClient;

class AffinityClient
{
    /**
     * @var LocationsClient $locations
     */
    public LocationsClient $locations;

    /**
     * @var ApiKeysClient $apiKeys
     */
    public ApiKeysClient $apiKeys;

    /**
     * @var AccountClient $account
     */
    public AccountClient $account;

    /**
     * @var PharmaciesClient $pharmacies
     */
    public PharmaciesClient $pharmacies;

    /**
     * @var OrdersClient $orders
     */
    public OrdersClient $orders;

    /**
     * @var TeamClient $team
     */
    public TeamClient $team;

    /**
     * @var PracticesClient $practices
     */
    public PracticesClient $practices;

    /**
     * @var PatientsClient $patients
     */
    public PatientsClient $patients;

    /**
     * @var CatalogClient $catalog
     */
    public CatalogClient $catalog;

    /**
     * @var WebhooksClient $webhooks
     */
    public WebhooksClient $webhooks;

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
     * @param string $apiKey The apiKey to use for authentication.
     * @param ?string $affinityVersion Selects the HTTP API contract for this request only. When omitted, API-key requests use their service account’s stored version. Does not change the stored default.
     * @param ?array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options
     */
    public function __construct(
        string $apiKey,
        ?string $affinityVersion = '2026-09-28',
        ?array $options = null,
    ) {
        $defaultHeaders = [
            'x-affinity-api-key' => $apiKey,
            'X-Fern-Language' => 'PHP',
            'X-Fern-SDK-Name' => 'Affinity',
            'User-Agent' => 'affinity-health/sdk/0.2.0',
        ];
        if ($affinityVersion != null) {
            $defaultHeaders['Affinity-Version'] = $affinityVersion;
        }

        $this->options = ($options ?? []) + ['timeout' => 60.0, 'maxRetries' => 0];

        $this->options['headers'] = array_merge(
            $defaultHeaders,
            $this->options['headers'] ?? [],
        );

        $this->client = new RawClient(
            options: $this->options,
        );

        $this->locations = new LocationsClient($this->client, $this->options);
        $this->apiKeys = new ApiKeysClient($this->client, $this->options);
        $this->account = new AccountClient($this->client, $this->options);
        $this->pharmacies = new PharmaciesClient($this->client, $this->options);
        $this->orders = new OrdersClient($this->client, $this->options);
        $this->team = new TeamClient($this->client, $this->options);
        $this->practices = new PracticesClient($this->client, $this->options);
        $this->patients = new PatientsClient($this->client, $this->options);
        $this->catalog = new CatalogClient($this->client, $this->options);
        $this->webhooks = new WebhooksClient($this->client, $this->options);
    }
}
