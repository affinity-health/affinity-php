<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class PlatformPublicApiSellingPricesReadPresentationPriceResponseBasisItem extends JsonSerializableType
{
    /**
     * @var value-of<PlatformPublicApiSellingPricesReadPresentationPriceResponseBasisItemQuantity> $quantity
     */
    #[JsonProperty('quantity')]
    public string $quantity;

    /**
     * @var string $unit
     */
    #[JsonProperty('unit')]
    public string $unit;

    /**
     * @var ?array<PlatformPublicApiSellingPricesReadPresentationPriceResponseBasisItemQuantityPricesItem> $quantityPrices
     */
    #[JsonProperty('quantityPrices'), ArrayType([PlatformPublicApiSellingPricesReadPresentationPriceResponseBasisItemQuantityPricesItem::class])]
    public ?array $quantityPrices;

    /**
     * @param array{
     *   quantity: value-of<PlatformPublicApiSellingPricesReadPresentationPriceResponseBasisItemQuantity>,
     *   unit: string,
     *   quantityPrices?: ?array<PlatformPublicApiSellingPricesReadPresentationPriceResponseBasisItemQuantityPricesItem>,
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
