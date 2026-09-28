<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthRatio extends JsonSerializableType
{
    /**
     * @var ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthRatioNumerator $numerator
     */
    #[JsonProperty('numerator')]
    public ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthRatioNumerator $numerator;

    /**
     * @var ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthRatioDenominator $denominator
     */
    #[JsonProperty('denominator')]
    public ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthRatioDenominator $denominator;

    /**
     * @param array{
     *   numerator: ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthRatioNumerator,
     *   denominator: ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthRatioDenominator,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->numerator = $values['numerator'];
        $this->denominator = $values['denominator'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
