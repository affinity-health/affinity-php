<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class ListCatalogItemsResponse extends JsonSerializableType
{
    /**
     * @var array<ListCatalogItemsResponseDataItem> $data
     */
    #[JsonProperty('data'), ArrayType([ListCatalogItemsResponseDataItem::class])]
    public array $data;

    /**
     * @var bool $hasMore
     */
    #[JsonProperty('hasMore')]
    public bool $hasMore;

    /**
     * @var value-of<ListCatalogItemsResponseObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var string $updatedAt
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @var value-of<ListCatalogItemsResponseUrl> $url
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @param array{
     *   data: array<ListCatalogItemsResponseDataItem>,
     *   hasMore: bool,
     *   object: value-of<ListCatalogItemsResponseObject>,
     *   updatedAt: string,
     *   url: value-of<ListCatalogItemsResponseUrl>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->data = $values['data'];
        $this->hasMore = $values['hasMore'];
        $this->object = $values['object'];
        $this->updatedAt = $values['updatedAt'];
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
