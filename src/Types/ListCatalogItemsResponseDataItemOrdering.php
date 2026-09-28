<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class ListCatalogItemsResponseDataItemOrdering extends JsonSerializableType
{
    /**
     * @var bool $requiresPrescription
     */
    #[JsonProperty('requiresPrescription')]
    public bool $requiresPrescription;

    /**
     * @var bool $requiresAccompanyingPrescription
     */
    #[JsonProperty('requiresAccompanyingPrescription')]
    public bool $requiresAccompanyingPrescription;

    /**
     * @var value-of<ListCatalogItemsResponseDataItemOrderingShipping> $shipping
     */
    #[JsonProperty('shipping')]
    public string $shipping;

    /**
     * @param array{
     *   requiresPrescription: bool,
     *   requiresAccompanyingPrescription: bool,
     *   shipping: value-of<ListCatalogItemsResponseDataItemOrderingShipping>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->requiresPrescription = $values['requiresPrescription'];
        $this->requiresAccompanyingPrescription = $values['requiresAccompanyingPrescription'];
        $this->shipping = $values['shipping'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
