<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class RetrievePrescribingOptionsResponseCatalogQuantityConstraintFixed extends JsonSerializableType
{
    /**
     * @var RetrievePrescribingOptionsResponseCatalogQuantityConstraintFixedQuantity $quantity
     */
    #[JsonProperty('quantity')]
    public RetrievePrescribingOptionsResponseCatalogQuantityConstraintFixedQuantity $quantity;

    /**
     * @param array{
     *   quantity: RetrievePrescribingOptionsResponseCatalogQuantityConstraintFixedQuantity,
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
