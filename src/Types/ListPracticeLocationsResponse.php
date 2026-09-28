<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class ListPracticeLocationsResponse extends JsonSerializableType
{
    /**
     * @var array<ListPracticeLocationsResponseDataItem> $data
     */
    #[JsonProperty('data'), ArrayType([ListPracticeLocationsResponseDataItem::class])]
    public array $data;

    /**
     * @var value-of<ListPracticeLocationsResponseObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var bool $hasMore
     */
    #[JsonProperty('hasMore')]
    public bool $hasMore;

    /**
     * @var string $url
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @param array{
     *   data: array<ListPracticeLocationsResponseDataItem>,
     *   object: value-of<ListPracticeLocationsResponseObject>,
     *   hasMore: bool,
     *   url: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->data = $values['data'];
        $this->object = $values['object'];
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
