<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class PreviewOrderResponseOrderInputOtcItemsItem extends JsonSerializableType
{
    /**
     * @var string $catalogItemId
     */
    #[JsonProperty('catalogItemId')]
    public string $catalogItemId;

    /**
     * @var int $quantity
     */
    #[JsonProperty('quantity')]
    public int $quantity;

    /**
     * @param array{
     *   catalogItemId: string,
     *   quantity: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->catalogItemId = $values['catalogItemId'];
        $this->quantity = $values['quantity'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
