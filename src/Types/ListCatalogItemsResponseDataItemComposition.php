<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class ListCatalogItemsResponseDataItemComposition extends JsonSerializableType
{
    /**
     * @var value-of<ListCatalogItemsResponseDataItemCompositionStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var array<ListCatalogItemsResponseDataItemCompositionIngredientsItem> $ingredients
     */
    #[JsonProperty('ingredients'), ArrayType([ListCatalogItemsResponseDataItemCompositionIngredientsItem::class])]
    public array $ingredients;

    /**
     * @param array{
     *   status: value-of<ListCatalogItemsResponseDataItemCompositionStatus>,
     *   ingredients: array<ListCatalogItemsResponseDataItemCompositionIngredientsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->status = $values['status'];
        $this->ingredients = $values['ingredients'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
