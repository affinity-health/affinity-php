<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class ListOrderEventsResponse extends JsonSerializableType
{
    /**
     * @var array<ListOrderEventsResponseDataItem> $data
     */
    #[JsonProperty('data'), ArrayType([ListOrderEventsResponseDataItem::class])]
    public array $data;

    /**
     * @var bool $hasMore
     */
    #[JsonProperty('hasMore')]
    public bool $hasMore;

    /**
     * @var value-of<ListOrderEventsResponseObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var string $url
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @param array{
     *   data: array<ListOrderEventsResponseDataItem>,
     *   hasMore: bool,
     *   object: value-of<ListOrderEventsResponseObject>,
     *   url: string,
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
