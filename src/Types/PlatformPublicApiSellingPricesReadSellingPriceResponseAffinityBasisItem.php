<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class PlatformPublicApiSellingPricesReadSellingPriceResponseAffinityBasisItem extends JsonSerializableType
{
    /**
     * @var value-of<PlatformPublicApiSellingPricesReadSellingPriceResponseAffinityBasisItemQuantity> $quantity
     */
    #[JsonProperty('quantity')]
    public string $quantity;

    /**
     * @var string $unit
     */
    #[JsonProperty('unit')]
    public string $unit;

    /**
     * @var ?array<PlatformPublicApiSellingPricesReadSellingPriceResponseAffinityBasisItemQuantityPricesItem> $quantityPrices
     */
    #[JsonProperty('quantityPrices'), ArrayType([PlatformPublicApiSellingPricesReadSellingPriceResponseAffinityBasisItemQuantityPricesItem::class])]
    public ?array $quantityPrices;

    /**
     * @param array{
     *   quantity: value-of<PlatformPublicApiSellingPricesReadSellingPriceResponseAffinityBasisItemQuantity>,
     *   unit: string,
     *   quantityPrices?: ?array<PlatformPublicApiSellingPricesReadSellingPriceResponseAffinityBasisItemQuantityPricesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->quantity = $values['quantity'];
        $this->unit = $values['unit'];
        $this->quantityPrices = $values['quantityPrices'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
