<?php

namespace Affinity\Catalog;

use Affinity\Catalog\Items\ItemsClient;
use Affinity\Catalog\ShippingOptions\ShippingOptionsClient;
use Affinity\Catalog\PrescribingOptions\PrescribingOptionsClient;
use Affinity\Catalog\SellingPrices\SellingPricesClient;
use Psr\Http\Client\ClientInterface;
use Affinity\Core\Client\RawClient;

class CatalogClient
{
    /**
     * @var ItemsClient $items
     */
    public ItemsClient $items;

    /**
     * @var ShippingOptionsClient $shippingOptions
     */
    public ShippingOptionsClient $shippingOptions;

    /**
     * @var PrescribingOptionsClient $prescribingOptions
     */
    public PrescribingOptionsClient $prescribingOptions;

    /**
     * @var SellingPricesClient $sellingPrices
     */
    public SellingPricesClient $sellingPrices;

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
        $this->items = new ItemsClient($this->client, $this->options);
        $this->shippingOptions = new ShippingOptionsClient($this->client, $this->options);
        $this->prescribingOptions = new PrescribingOptionsClient($this->client, $this->options);
        $this->sellingPrices = new SellingPricesClient($this->client, $this->options);
    }
}
