<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class RetrievePrescribingOptionsResponseCatalogQuantityConstraintChoices extends JsonSerializableType
{
    /**
     * @var array<RetrievePrescribingOptionsResponseCatalogQuantityConstraintChoicesQuantitiesItem> $quantities
     */
    #[JsonProperty('quantities'), ArrayType([RetrievePrescribingOptionsResponseCatalogQuantityConstraintChoicesQuantitiesItem::class])]
    public array $quantities;

    /**
     * @param array{
     *   quantities: array<RetrievePrescribingOptionsResponseCatalogQuantityConstraintChoicesQuantitiesItem>,
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
