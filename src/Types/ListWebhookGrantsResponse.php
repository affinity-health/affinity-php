<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class ListWebhookGrantsResponse extends JsonSerializableType
{
    /**
     * @var value-of<ListWebhookGrantsResponseObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var array<ListWebhookGrantsResponseDataItem> $data
     */
    #[JsonProperty('data'), ArrayType([ListWebhookGrantsResponseDataItem::class])]
    public array $data;

    /**
     * @var bool $hasMore
     */
    #[JsonProperty('hasMore')]
    public bool $hasMore;

    /**
     * @var value-of<ListWebhookGrantsResponseUrl> $url
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @param array{
     *   object: value-of<ListWebhookGrantsResponseObject>,
     *   data: array<ListWebhookGrantsResponseDataItem>,
     *   hasMore: bool,
     *   url: value-of<ListWebhookGrantsResponseUrl>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->object = $values['object'];
        $this->data = $values['data'];
        $this->hasMore = $values['hasMore'];
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
