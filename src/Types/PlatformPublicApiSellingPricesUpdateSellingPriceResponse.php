<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class PlatformPublicApiSellingPricesUpdateSellingPriceResponse extends JsonSerializableType
{
    /**
     * @var ?int $amountCents
     */
    #[JsonProperty('amountCents')]
    public ?int $amountCents;

    /**
     * @var int $version
     */
    #[JsonProperty('version')]
    public int $version;

    /**
     * @var value-of<PlatformPublicApiSellingPricesUpdateSellingPriceResponseCurrency> $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var PlatformPublicApiSellingPricesUpdateSellingPriceResponseBasis $basis
     */
    #[JsonProperty('basis')]
    public PlatformPublicApiSellingPricesUpdateSellingPriceResponseBasis $basis;

    /**
     * @var int $purchaseAmountCents
     */
    #[JsonProperty('purchaseAmountCents')]
    public int $purchaseAmountCents;

    /**
     * @var bool $requiresReview
     */
    #[JsonProperty('requiresReview')]
    public bool $requiresReview;

    /**
     * @param array{
     *   version: int,
     *   currency: value-of<PlatformPublicApiSellingPricesUpdateSellingPriceResponseCurrency>,
     *   basis: PlatformPublicApiSellingPricesUpdateSellingPriceResponseBasis,
     *   purchaseAmountCents: int,
     *   requiresReview: bool,
     *   amountCents?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->amountCents = $values['amountCents'] ?? null;
        $this->version = $values['version'];
        $this->currency = $values['currency'];
        $this->basis = $values['basis'];
        $this->purchaseAmountCents = $values['purchaseAmountCents'];
        $this->requiresReview = $values['requiresReview'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
