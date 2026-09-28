<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthRatio extends JsonSerializableType
{
    /**
     * @var RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthRatioNumerator $numerator
     */
    #[JsonProperty('numerator')]
    public RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthRatioNumerator $numerator;

    /**
     * @var RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthRatioDenominator $denominator
     */
    #[JsonProperty('denominator')]
    public RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthRatioDenominator $denominator;

    /**
     * @param array{
     *   numerator: RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthRatioNumerator,
     *   denominator: RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthRatioDenominator,
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
