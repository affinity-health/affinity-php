<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class CreateOrderResponseOtcItemsItem extends JsonSerializableType
{
    /**
     * @var string $catalogItemId
     */
    #[JsonProperty('catalogItemId')]
    public string $catalogItemId;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var int $quantity
     */
    #[JsonProperty('quantity')]
    public int $quantity;

    /**
     * @var int $unitPriceCents
     */
    #[JsonProperty('unitPriceCents')]
    public int $unitPriceCents;

    /**
     * @var int $subtotalCents
     */
    #[JsonProperty('subtotalCents')]
    public int $subtotalCents;

    /**
     * @param array{
     *   catalogItemId: string,
     *   name: string,
     *   quantity: int,
     *   unitPriceCents: int,
     *   subtotalCents: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->catalogItemId = $values['catalogItemId'];
        $this->name = $values['name'];
        $this->quantity = $values['quantity'];
        $this->unitPriceCents = $values['unitPriceCents'];
        $this->subtotalCents = $values['subtotalCents'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
