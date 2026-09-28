<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class PreviewOrderResponseTotals extends JsonSerializableType
{
    /**
     * @var value-of<PreviewOrderResponseTotalsCurrency> $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var ?int $medicationSubtotalCents
     */
    #[JsonProperty('medicationSubtotalCents')]
    public ?int $medicationSubtotalCents;

    /**
     * @var ?int $supplySubtotalCents
     */
    #[JsonProperty('supplySubtotalCents')]
    public ?int $supplySubtotalCents;

    /**
     * @var ?int $shippingTotalCents
     */
    #[JsonProperty('shippingTotalCents')]
    public ?int $shippingTotalCents;

    /**
     * @var ?int $estimatedTotalCents
     */
    #[JsonProperty('estimatedTotalCents')]
    public ?int $estimatedTotalCents;

    /**
     * @param array{
     *   currency: value-of<PreviewOrderResponseTotalsCurrency>,
     *   medicationSubtotalCents?: ?int,
     *   supplySubtotalCents?: ?int,
     *   shippingTotalCents?: ?int,
     *   estimatedTotalCents?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->currency = $values['currency'];
        $this->medicationSubtotalCents = $values['medicationSubtotalCents'] ?? null;
        $this->supplySubtotalCents = $values['supplySubtotalCents'] ?? null;
        $this->shippingTotalCents = $values['shippingTotalCents'] ?? null;
        $this->estimatedTotalCents = $values['estimatedTotalCents'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
