<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class PlatformPublicApiSellingPricesReadPresentationPriceResponseBasisItemQuantityPricesItem extends JsonSerializableType
{
    /**
     * @var string $quantity
     */
    #[JsonProperty('quantity')]
    public string $quantity;

    /**
     * @var int $amountCents
     */
    #[JsonProperty('amountCents')]
    public int $amountCents;

    /**
     * @param array{
     *   quantity: string,
     *   amountCents: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->quantity = $values['quantity'];
        $this->amountCents = $values['amountCents'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
