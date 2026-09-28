<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthAmount extends JsonSerializableType
{
    /**
     * @var RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthAmountAmount $amount
     */
    #[JsonProperty('amount')]
    public RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthAmountAmount $amount;

    /**
     * @param array{
     *   amount: RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthAmountAmount,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->amount = $values['amount'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
