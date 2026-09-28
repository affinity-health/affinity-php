<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class ListCatalogItemsResponseDataItemQuantityConstraintChoices extends JsonSerializableType
{
    /**
     * @var array<ListCatalogItemsResponseDataItemQuantityConstraintChoicesQuantitiesItem> $quantities
     */
    #[JsonProperty('quantities'), ArrayType([ListCatalogItemsResponseDataItemQuantityConstraintChoicesQuantitiesItem::class])]
    public array $quantities;

    /**
     * @param array{
     *   quantities: array<ListCatalogItemsResponseDataItemQuantityConstraintChoicesQuantitiesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->quantities = $values['quantities'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
