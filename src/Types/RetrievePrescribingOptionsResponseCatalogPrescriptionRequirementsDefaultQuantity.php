<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\Union;

class RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsDefaultQuantity extends JsonSerializableType
{
    /**
     * @var string $unit
     */
    #[JsonProperty('unit')]
    public string $unit;

    /**
     * @var (
     *    float
     *   |value-of<RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsDefaultQuantityValueOne>
     * ) $value
     */
    #[JsonProperty('value'), Union('float', 'string')]
    public float|string $value;

    /**
     * @param array{
     *   unit: string,
     *   value: (
     *    float
     *   |value-of<RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsDefaultQuantityValueOne>
     * ),
     * } $values
     */
    public function __construct(
        array $values,
    ) {
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
