<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class PlatformPublicApiSellingPricesReadSellingPriceResponseBasisUnit extends JsonSerializableType
{
    /**
     * @var value-of<PlatformPublicApiSellingPricesReadSellingPriceResponseBasisUnitQuantity> $quantity
     */
    #[JsonProperty('quantity')]
    public string $quantity;

    /**
     * @var string $unit
     */
    #[JsonProperty('unit')]
    public string $unit;

    /**
     * @param array{
     *   quantity: value-of<PlatformPublicApiSellingPricesReadSellingPriceResponseBasisUnitQuantity>,
     *   unit: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->quantity = $values['quantity'];
        $this->unit = $values['unit'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
