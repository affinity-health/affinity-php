<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class PlatformPublicApiSellingPricesReadSellingPriceResponseBasisItem extends JsonSerializableType
{
    /**
     * @var value-of<PlatformPublicApiSellingPricesReadSellingPriceResponseBasisItemQuantity> $quantity
     */
    #[JsonProperty('quantity')]
    public string $quantity;

    /**
     * @var string $unit
     */
    #[JsonProperty('unit')]
    public string $unit;

    /**
     * @var ?array<PlatformPublicApiSellingPricesReadSellingPriceResponseBasisItemQuantityPricesItem> $quantityPrices
     */
    #[JsonProperty('quantityPrices'), ArrayType([PlatformPublicApiSellingPricesReadSellingPriceResponseBasisItemQuantityPricesItem::class])]
    public ?array $quantityPrices;

    /**
     * @param array{
     *   quantity: value-of<PlatformPublicApiSellingPricesReadSellingPriceResponseBasisItemQuantity>,
     *   unit: string,
     *   quantityPrices?: ?array<PlatformPublicApiSellingPricesReadSellingPriceResponseBasisItemQuantityPricesItem>,
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
