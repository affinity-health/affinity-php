<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class RetrievePrescribingOptionsResponseCatalogShippingOptionsItem extends JsonSerializableType
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
     * @var value-of<RetrievePrescribingOptionsResponseCatalogShippingOptionsItemCurrency> $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var array<value-of<RetrievePrescribingOptionsResponseCatalogShippingOptionsItemDestinationTypesItem>> $destinationTypes
     */
    #[JsonProperty('destinationTypes'), ArrayType(['string'])]
    public array $destinationTypes;

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
     * @var array<value-of<RetrievePrescribingOptionsResponseCatalogShippingOptionsItemTemperaturesItem>> $temperatures
     */
    #[JsonProperty('temperatures'), ArrayType(['string'])]
    public array $temperatures;

    /**
     * @param array{
     *   amountCents: int,
     *   currency: value-of<RetrievePrescribingOptionsResponseCatalogShippingOptionsItemCurrency>,
     *   destinationTypes: array<value-of<RetrievePrescribingOptionsResponseCatalogShippingOptionsItemDestinationTypesItem>>,
     *   id: string,
     *   label: string,
     *   serviceLevel: string,
     *   temperatures: array<value-of<RetrievePrescribingOptionsResponseCatalogShippingOptionsItemTemperaturesItem>>,
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
        $this->destinationTypes = $values['destinationTypes'];
        $this->estimatedDaysMax = $values['estimatedDaysMax'] ?? null;
        $this->estimatedDaysMin = $values['estimatedDaysMin'] ?? null;
        $this->id = $values['id'];
        $this->label = $values['label'];
        $this->serviceLevel = $values['serviceLevel'];
        $this->temperatures = $values['temperatures'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
