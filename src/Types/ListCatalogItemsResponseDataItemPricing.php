<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class ListCatalogItemsResponseDataItemPricing extends JsonSerializableType
{
    /**
     * @var int $amountCents
     */
    #[JsonProperty('amountCents')]
    public int $amountCents;

    /**
     * @var ListCatalogItemsResponseDataItemPricingBasis $basis
     */
    #[JsonProperty('basis')]
    public ListCatalogItemsResponseDataItemPricingBasis $basis;

    /**
     * @var value-of<ListCatalogItemsResponseDataItemPricingCurrency> $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var int $medicationSubtotalCents
     */
    #[JsonProperty('medicationSubtotalCents')]
    public int $medicationSubtotalCents;

    /**
     * @param array{
     *   amountCents: int,
     *   basis: ListCatalogItemsResponseDataItemPricingBasis,
     *   currency: value-of<ListCatalogItemsResponseDataItemPricingCurrency>,
     *   medicationSubtotalCents: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->amountCents = $values['amountCents'];
        $this->basis = $values['basis'];
        $this->currency = $values['currency'];
        $this->medicationSubtotalCents = $values['medicationSubtotalCents'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
