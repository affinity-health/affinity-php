<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class GetOrderResponseFulfillmentsItemShippingOption extends JsonSerializableType
{
    /**
     * @var int $amountCents
     */
    #[JsonProperty('amountCents')]
    public int $amountCents;

    /**
     * @var value-of<GetOrderResponseFulfillmentsItemShippingOptionCurrency> $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var string $label
     */
    #[JsonProperty('label')]
    public string $label;

    /**
     * @var string $serviceLevel
     */
    #[JsonProperty('serviceLevel')]
    public string $serviceLevel;

    /**
     * @var value-of<GetOrderResponseFulfillmentsItemShippingOptionTemperature> $temperature
     */
    #[JsonProperty('temperature')]
    public string $temperature;

    /**
     * @param array{
     *   amountCents: int,
     *   currency: value-of<GetOrderResponseFulfillmentsItemShippingOptionCurrency>,
     *   label: string,
     *   serviceLevel: string,
     *   temperature: value-of<GetOrderResponseFulfillmentsItemShippingOptionTemperature>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->amountCents = $values['amountCents'];
        $this->currency = $values['currency'];
        $this->label = $values['label'];
        $this->serviceLevel = $values['serviceLevel'];
        $this->temperature = $values['temperature'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
