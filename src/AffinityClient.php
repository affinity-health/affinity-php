<?php

namespace Affinity;

use Affinity\Locations\LocationsClient;
use Affinity\ApiKeys\ApiKeysClient;
use Affinity\Account\AccountClient;
use Affinity\Catalog\CatalogClient;
use Affinity\Orders\OrdersClient;
use Affinity\Webhooks\WebhooksClient;
use Affinity\Team\TeamClient;
use Affinity\Patients\PatientsClient;
use Affinity\Practices\PracticesClient;
use Affinity\PlatformPricing\PlatformPricingClient;
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
     * @var CatalogClient $catalog
     */
    public CatalogClient $catalog;

    /**
     * @var OrdersClient $orders
     */
    public OrdersClient $orders;

    /**
     * @var WebhooksClient $webhooks
     */
    public WebhooksClient $webhooks;

    /**
     * @var TeamClient $team
     */
    public TeamClient $team;

    /**
     * @var PatientsClient $patients
     */
    public PatientsClient $patients;

    /**
     * @var PracticesClient $practices
     */
    public PracticesClient $practices;

    /**
     * @var PlatformPricingClient $platformPricing
     */
    public PlatformPricingClient $platformPricing;

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
        ?string $affinityVersion = null,
        ?array $options = null,
    ) {
        $defaultHeaders = [
            'x-affinity-api-key' => $apiKey,
            'X-Fern-Language' => 'PHP',
            'X-Fern-SDK-Name' => 'Affinity',
            'User-Agent' => 'affinity-health/sdk/0.1.0',
        ];
        if ($affinityVersion != null) {
            $defaultHeaders['Affinity-Version'] = $affinityVersion;
        }

        $this->options = $options ?? [];

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
        $this->catalog = new CatalogClient($this->client, $this->options);
        $this->orders = new OrdersClient($this->client, $this->options);
        $this->webhooks = new WebhooksClient($this->client, $this->options);
        $this->team = new TeamClient($this->client, $this->options);
        $this->patients = new PatientsClient($this->client, $this->options);
        $this->practices = new PracticesClient($this->client, $this->options);
        $this->platformPricing = new PlatformPricingClient($this->client, $this->options);
    }
}
