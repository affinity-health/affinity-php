<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class ListWebhookEventsResponse extends JsonSerializableType
{
    /**
     * @var array<ListWebhookEventsResponseDataItem> $data
     */
    #[JsonProperty('data'), ArrayType([ListWebhookEventsResponseDataItem::class])]
    public array $data;

    /**
     * @var bool $hasMore
     */
    #[JsonProperty('hasMore')]
    public bool $hasMore;

    /**
     * @var value-of<ListWebhookEventsResponseObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var value-of<ListWebhookEventsResponseUrl> $url
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @param array{
     *   data: array<ListWebhookEventsResponseDataItem>,
     *   hasMore: bool,
     *   object: value-of<ListWebhookEventsResponseObject>,
     *   url: value-of<ListWebhookEventsResponseUrl>,
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
