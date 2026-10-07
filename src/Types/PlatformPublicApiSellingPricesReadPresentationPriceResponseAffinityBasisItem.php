<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class PlatformPublicApiSellingPricesReadPresentationPriceResponseAffinityBasisItem extends JsonSerializableType
{
    /**
     * @var value-of<PlatformPublicApiSellingPricesReadPresentationPriceResponseAffinityBasisItemQuantity> $quantity
     */
    #[JsonProperty('quantity')]
    public string $quantity;

    /**
     * @var string $unit
     */
    #[JsonProperty('unit')]
    public string $unit;

    /**
     * @var ?array<PlatformPublicApiSellingPricesReadPresentationPriceResponseAffinityBasisItemQuantityPricesItem> $quantityPrices
     */
    #[JsonProperty('quantityPrices'), ArrayType([PlatformPublicApiSellingPricesReadPresentationPriceResponseAffinityBasisItemQuantityPricesItem::class])]
    public ?array $quantityPrices;

    /**
     * @param array{
     *   quantity: value-of<PlatformPublicApiSellingPricesReadPresentationPriceResponseAffinityBasisItemQuantity>,
     *   unit: string,
     *   quantityPrices?: ?array<PlatformPublicApiSellingPricesReadPresentationPriceResponseAffinityBasisItemQuantityPricesItem>,
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
