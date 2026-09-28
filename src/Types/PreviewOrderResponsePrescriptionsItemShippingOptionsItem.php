<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class PreviewOrderResponsePrescriptionsItemShippingOptionsItem extends JsonSerializableType
{
    /**
     * @var int $amountCents
     */
    #[JsonProperty('amountCents')]
    public int $amountCents;

    /**
     * @var ?string $carrier
     */
    #[JsonProperty('carrier')]
    public ?string $carrier;

    /**
     * @var value-of<PreviewOrderResponsePrescriptionsItemShippingOptionsItemCurrency> $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var ?int $estimatedDaysMax
     */
    #[JsonProperty('estimatedDaysMax')]
    public ?int $estimatedDaysMax;

    /**
     * @var ?int $estimatedDaysMin
     */
    #[JsonProperty('estimatedDaysMin')]
    public ?int $estimatedDaysMin;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

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
     * @var value-of<PreviewOrderResponsePrescriptionsItemShippingOptionsItemTemperature> $temperature
     */
    #[JsonProperty('temperature')]
    public string $temperature;

    /**
     * @param array{
     *   amountCents: int,
     *   currency: value-of<PreviewOrderResponsePrescriptionsItemShippingOptionsItemCurrency>,
     *   id: string,
     *   label: string,
     *   serviceLevel: string,
     *   temperature: value-of<PreviewOrderResponsePrescriptionsItemShippingOptionsItemTemperature>,
     *   carrier?: ?string,
     *   estimatedDaysMax?: ?int,
     *   estimatedDaysMin?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->amountCents = $values['amountCents'];
        $this->carrier = $values['carrier'] ?? null;
        $this->currency = $values['currency'];
        $this->estimatedDaysMax = $values['estimatedDaysMax'] ?? null;
        $this->estimatedDaysMin = $values['estimatedDaysMin'] ?? null;
        $this->id = $values['id'];
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
