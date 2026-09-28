<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class ListPharmaciesResponse extends JsonSerializableType
{
    /**
     * @var array<ListPharmaciesResponseDataItem> $data
     */
    #[JsonProperty('data'), ArrayType([ListPharmaciesResponseDataItem::class])]
    public array $data;

    /**
     * @var bool $hasMore
     */
    #[JsonProperty('hasMore')]
    public bool $hasMore;

    /**
     * @var value-of<ListPharmaciesResponseObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var value-of<ListPharmaciesResponseUrl> $url
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @param array{
     *   data: array<ListPharmaciesResponseDataItem>,
     *   hasMore: bool,
     *   object: value-of<ListPharmaciesResponseObject>,
     *   url: value-of<ListPharmaciesResponseUrl>,
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
