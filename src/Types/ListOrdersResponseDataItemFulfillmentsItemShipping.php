<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class ListOrdersResponseDataItemFulfillmentsItemShipping extends JsonSerializableType
{
    /**
     * @var value-of<ListOrdersResponseDataItemFulfillmentsItemShippingDestinationType> $destinationType
     */
    #[JsonProperty('destinationType')]
    public string $destinationType;

    /**
     * @var value-of<ListOrdersResponseDataItemFulfillmentsItemShippingMethod> $method
     */
    #[JsonProperty('method')]
    public string $method;

    /**
     * @var ?ListOrdersResponseDataItemFulfillmentsItemShippingOption $option
     */
    #[JsonProperty('option')]
    public ?ListOrdersResponseDataItemFulfillmentsItemShippingOption $option;

    /**
     * @param array{
     *   destinationType: value-of<ListOrdersResponseDataItemFulfillmentsItemShippingDestinationType>,
     *   method: value-of<ListOrdersResponseDataItemFulfillmentsItemShippingMethod>,
     *   option?: ?ListOrdersResponseDataItemFulfillmentsItemShippingOption,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->destinationType = $values['destinationType'];
        $this->method = $values['method'];
        $this->option = $values['option'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
