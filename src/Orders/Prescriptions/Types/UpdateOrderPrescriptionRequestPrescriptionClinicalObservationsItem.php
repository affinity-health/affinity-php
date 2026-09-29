<?php

namespace Affinity\Orders\Prescriptions\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\Union;

class UpdateOrderPrescriptionRequestPrescriptionClinicalObservationsItem extends JsonSerializableType
{
    /**
     * @var string $display
     */
    #[JsonProperty('display')]
    public string $display;

    /**
     * @var string $unit
     */
    #[JsonProperty('unit')]
    public string $unit;

    /**
     * @var (
     *    float
     *   |value-of<UpdateOrderPrescriptionRequestPrescriptionClinicalObservationsItemValueOne>
     * ) $value
     */
    #[JsonProperty('value'), Union('float', 'string')]
    public float|string $value;

    /**
     * @param array{
     *   display: string,
     *   unit: string,
     *   value: (
     *    float
     *   |value-of<UpdateOrderPrescriptionRequestPrescriptionClinicalObservationsItemValueOne>
     * ),
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->display = $values['display'];
        $this->unit = $values['unit'];
        $this->value = $values['value'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
