<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class ListWebhookEndpointsResponse extends JsonSerializableType
{
    /**
     * @var array<ListWebhookEndpointsResponseDataItem> $data
     */
    #[JsonProperty('data'), ArrayType([ListWebhookEndpointsResponseDataItem::class])]
    public array $data;

    /**
     * @var bool $hasMore
     */
    #[JsonProperty('hasMore')]
    public bool $hasMore;

    /**
     * @var value-of<ListWebhookEndpointsResponseObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var value-of<ListWebhookEndpointsResponseUrl> $url
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @param array{
     *   data: array<ListWebhookEndpointsResponseDataItem>,
     *   hasMore: bool,
     *   object: value-of<ListWebhookEndpointsResponseObject>,
     *   url: value-of<ListWebhookEndpointsResponseUrl>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->data = $values['data'];
        $this->hasMore = $values['hasMore'];
        $this->object = $values['object'];
        $this->url = $values['url'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
