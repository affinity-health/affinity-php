<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class RetrievePrescribingOptionsResponseCatalogPricingBasisItem extends JsonSerializableType
{
    /**
     * @var value-of<RetrievePrescribingOptionsResponseCatalogPricingBasisItemQuantity> $quantity
     */
    #[JsonProperty('quantity')]
    public string $quantity;

    /**
     * @var string $unit
     */
    #[JsonProperty('unit')]
    public string $unit;

    /**
     * @var ?array<RetrievePrescribingOptionsResponseCatalogPricingBasisItemQuantityPricesItem> $quantityPrices
     */
    #[JsonProperty('quantityPrices'), ArrayType([RetrievePrescribingOptionsResponseCatalogPricingBasisItemQuantityPricesItem::class])]
    public ?array $quantityPrices;

    /**
     * @param array{
     *   quantity: value-of<RetrievePrescribingOptionsResponseCatalogPricingBasisItemQuantity>,
     *   unit: string,
     *   quantityPrices?: ?array<RetrievePrescribingOptionsResponseCatalogPricingBasisItemQuantityPricesItem>,
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
