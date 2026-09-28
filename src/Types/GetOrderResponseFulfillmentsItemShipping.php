<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class GetOrderResponseFulfillmentsItemShipping extends JsonSerializableType
{
    /**
     * @var value-of<GetOrderResponseFulfillmentsItemShippingDestinationType> $destinationType
     */
    #[JsonProperty('destinationType')]
    public string $destinationType;

    /**
     * @var value-of<GetOrderResponseFulfillmentsItemShippingMethod> $method
     */
    #[JsonProperty('method')]
    public string $method;

    /**
     * @var ?GetOrderResponseFulfillmentsItemShippingOption $option
     */
    #[JsonProperty('option')]
    public ?GetOrderResponseFulfillmentsItemShippingOption $option;

    /**
     * @param array{
     *   destinationType: value-of<GetOrderResponseFulfillmentsItemShippingDestinationType>,
     *   method: value-of<GetOrderResponseFulfillmentsItemShippingMethod>,
     *   option?: ?GetOrderResponseFulfillmentsItemShippingOption,
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
