<?php

namespace Affinity\Webhooks;

use Affinity\Webhooks\Endpoints\EndpointsClient;
use Affinity\Webhooks\Events\EventsClient;
use Affinity\Webhooks\Grants\GrantsClient;
use Psr\Http\Client\ClientInterface;
use Affinity\Core\Client\RawClient;

class WebhooksClient
{
    /**
     * @var EndpointsClient $endpoints
     */
    public EndpointsClient $endpoints;

    /**
     * @var EventsClient $events
     */
    public EventsClient $events;

    /**
     * @var GrantsClient $grants
     */
    public GrantsClient $grants;

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
        $this->endpoints = new EndpointsClient($this->client, $this->options);
        $this->events = new EventsClient($this->client, $this->options);
        $this->grants = new GrantsClient($this->client, $this->options);
    }
}
