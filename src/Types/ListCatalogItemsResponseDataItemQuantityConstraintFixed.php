<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class ListCatalogItemsResponseDataItemQuantityConstraintFixed extends JsonSerializableType
{
    /**
     * @var ListCatalogItemsResponseDataItemQuantityConstraintFixedQuantity $quantity
     */
    #[JsonProperty('quantity')]
    public ListCatalogItemsResponseDataItemQuantityConstraintFixedQuantity $quantity;

    /**
     * @param array{
     *   quantity: ListCatalogItemsResponseDataItemQuantityConstraintFixedQuantity,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->quantity = $values['quantity'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
