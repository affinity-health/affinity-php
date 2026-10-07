<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class PlatformPublicApiSellingPricesReadSellingPriceResponse extends JsonSerializableType
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
     * @var value-of<PlatformPublicApiSellingPricesReadSellingPriceResponseCurrency> $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var ?int $affinityPriceCents
     */
    #[JsonProperty('affinityPriceCents')]
    public ?int $affinityPriceCents;

    /**
     * @var ?PlatformPublicApiSellingPricesReadSellingPriceResponseAffinityBasis $affinityBasis
     */
    #[JsonProperty('affinityBasis')]
    public ?PlatformPublicApiSellingPricesReadSellingPriceResponseAffinityBasis $affinityBasis;

    /**
     * @var PlatformPublicApiSellingPricesReadSellingPriceResponseBasis $basis
     */
    #[JsonProperty('basis')]
    public PlatformPublicApiSellingPricesReadSellingPriceResponseBasis $basis;

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
     *   currency: value-of<PlatformPublicApiSellingPricesReadSellingPriceResponseCurrency>,
     *   basis: PlatformPublicApiSellingPricesReadSellingPriceResponseBasis,
     *   purchaseAmountCents: int,
     *   requiresReview: bool,
     *   amountCents?: ?int,
     *   affinityPriceCents?: ?int,
     *   affinityBasis?: ?PlatformPublicApiSellingPricesReadSellingPriceResponseAffinityBasis,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->amountCents = $values['amountCents'] ?? null;
        $this->version = $values['version'];
        $this->currency = $values['currency'];
        $this->affinityPriceCents = $values['affinityPriceCents'] ?? null;
        $this->affinityBasis = $values['affinityBasis'] ?? null;
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
