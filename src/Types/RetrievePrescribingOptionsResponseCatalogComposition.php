<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class RetrievePrescribingOptionsResponseCatalogComposition extends JsonSerializableType
{
    /**
     * @var value-of<RetrievePrescribingOptionsResponseCatalogCompositionStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var array<RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItem> $ingredients
     */
    #[JsonProperty('ingredients'), ArrayType([RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItem::class])]
    public array $ingredients;

    /**
     * @param array{
     *   status: value-of<RetrievePrescribingOptionsResponseCatalogCompositionStatus>,
     *   ingredients: array<RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItem>,
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
