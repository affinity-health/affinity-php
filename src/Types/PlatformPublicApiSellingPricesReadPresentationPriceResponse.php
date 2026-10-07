<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class PlatformPublicApiSellingPricesReadPresentationPriceResponse extends JsonSerializableType
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
     * @var value-of<PlatformPublicApiSellingPricesReadPresentationPriceResponseCurrency> $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var ?int $affinityPriceCents
     */
    #[JsonProperty('affinityPriceCents')]
    public ?int $affinityPriceCents;

    /**
     * @var ?PlatformPublicApiSellingPricesReadPresentationPriceResponseAffinityBasis $affinityBasis
     */
    #[JsonProperty('affinityBasis')]
    public ?PlatformPublicApiSellingPricesReadPresentationPriceResponseAffinityBasis $affinityBasis;

    /**
     * @var ?PlatformPublicApiSellingPricesReadPresentationPriceResponseBasis $basis
     */
    #[JsonProperty('basis')]
    public ?PlatformPublicApiSellingPricesReadPresentationPriceResponseBasis $basis;

    /**
     * @param array{
     *   version: int,
     *   currency: value-of<PlatformPublicApiSellingPricesReadPresentationPriceResponseCurrency>,
     *   amountCents?: ?int,
     *   affinityPriceCents?: ?int,
     *   affinityBasis?: ?PlatformPublicApiSellingPricesReadPresentationPriceResponseAffinityBasis,
     *   basis?: ?PlatformPublicApiSellingPricesReadPresentationPriceResponseBasis,
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
        $this->basis = $values['basis'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
