<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class CancelOrderResponseFulfillmentsItemShipping extends JsonSerializableType
{
    /**
     * @var value-of<CancelOrderResponseFulfillmentsItemShippingDestinationType> $destinationType
     */
    #[JsonProperty('destinationType')]
    public string $destinationType;

    /**
     * @var value-of<CancelOrderResponseFulfillmentsItemShippingMethod> $method
     */
    #[JsonProperty('method')]
    public string $method;

    /**
     * @var ?CancelOrderResponseFulfillmentsItemShippingOption $option
     */
    #[JsonProperty('option')]
    public ?CancelOrderResponseFulfillmentsItemShippingOption $option;

    /**
     * @param array{
     *   destinationType: value-of<CancelOrderResponseFulfillmentsItemShippingDestinationType>,
     *   method: value-of<CancelOrderResponseFulfillmentsItemShippingMethod>,
     *   option?: ?CancelOrderResponseFulfillmentsItemShippingOption,
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
