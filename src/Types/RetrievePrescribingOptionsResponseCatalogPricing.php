<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class RetrievePrescribingOptionsResponseCatalogPricing extends JsonSerializableType
{
    /**
     * @var int $amountCents
     */
    #[JsonProperty('amountCents')]
    public int $amountCents;

    /**
     * @var RetrievePrescribingOptionsResponseCatalogPricingBasis $basis
     */
    #[JsonProperty('basis')]
    public RetrievePrescribingOptionsResponseCatalogPricingBasis $basis;

    /**
     * @var value-of<RetrievePrescribingOptionsResponseCatalogPricingCurrency> $currency
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
     *   basis: RetrievePrescribingOptionsResponseCatalogPricingBasis,
     *   currency: value-of<RetrievePrescribingOptionsResponseCatalogPricingCurrency>,
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
