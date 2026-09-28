<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthAmount extends JsonSerializableType
{
    /**
     * @var ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthAmountAmount $amount
     */
    #[JsonProperty('amount')]
    public ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthAmountAmount $amount;

    /**
     * @param array{
     *   amount: ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthAmountAmount,
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
