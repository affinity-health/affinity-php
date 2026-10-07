<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class ListCatalogItemsResponseDataItemPricingBasisItem extends JsonSerializableType
{
    /**
     * @var value-of<ListCatalogItemsResponseDataItemPricingBasisItemQuantity> $quantity
     */
    #[JsonProperty('quantity')]
    public string $quantity;

    /**
     * @var string $unit
     */
    #[JsonProperty('unit')]
    public string $unit;

    /**
     * @var ?array<ListCatalogItemsResponseDataItemPricingBasisItemQuantityPricesItem> $quantityPrices
     */
    #[JsonProperty('quantityPrices'), ArrayType([ListCatalogItemsResponseDataItemPricingBasisItemQuantityPricesItem::class])]
    public ?array $quantityPrices;

    /**
     * @param array{
     *   quantity: value-of<ListCatalogItemsResponseDataItemPricingBasisItemQuantity>,
     *   unit: string,
     *   quantityPrices?: ?array<ListCatalogItemsResponseDataItemPricingBasisItemQuantityPricesItem>,
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
