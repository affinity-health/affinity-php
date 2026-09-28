<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class PreviewOrderResponseShippingGroupsItem extends JsonSerializableType
{
    /**
     * @var string $key
     */
    #[JsonProperty('key')]
    public string $key;

    /**
     * @var string $pharmacy
     */
    #[JsonProperty('pharmacy')]
    public string $pharmacy;

    /**
     * @var string $label
     */
    #[JsonProperty('label')]
    public string $label;

    /**
     * @var value-of<PreviewOrderResponseShippingGroupsItemTemperature> $temperature
     */
    #[JsonProperty('temperature')]
    public string $temperature;

    /**
     * @var int $amountCents
     */
    #[JsonProperty('amountCents')]
    public int $amountCents;

    /**
     * @var int $itemCount
     */
    #[JsonProperty('itemCount')]
    public int $itemCount;

    /**
     * @var array<int> $prescriptionIndexes Zero-based indexes into the preview prescriptions array. This is an estimated shipping charge group, not a guarantee of one physical package.
     */
    #[JsonProperty('prescriptionIndexes'), ArrayType(['integer'])]
    public array $prescriptionIndexes;

    /**
     * @param array{
     *   key: string,
     *   pharmacy: string,
     *   label: string,
     *   temperature: value-of<PreviewOrderResponseShippingGroupsItemTemperature>,
     *   amountCents: int,
     *   itemCount: int,
     *   prescriptionIndexes: array<int>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->key = $values['key'];
        $this->pharmacy = $values['pharmacy'];
        $this->label = $values['label'];
        $this->temperature = $values['temperature'];
        $this->amountCents = $values['amountCents'];
        $this->itemCount = $values['itemCount'];
        $this->prescriptionIndexes = $values['prescriptionIndexes'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
