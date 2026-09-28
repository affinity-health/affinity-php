<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\Union;

class RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsQuantityIncrement extends JsonSerializableType
{
    /**
     * @var (
     *    float
     *   |value-of<RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsQuantityIncrementMaxOne>
     * )|null $max
     */
    #[JsonProperty('max'), Union('float', 'string', 'null')]
    public float|string|null $max;

    /**
     * @var (
     *    float
     *   |value-of<RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsQuantityIncrementMinOne>
     * )|null $min
     */
    #[JsonProperty('min'), Union('float', 'string', 'null')]
    public float|string|null $min;

    /**
     * @var string $unit
     */
    #[JsonProperty('unit')]
    public string $unit;

    /**
     * @var (
     *    float
     *   |value-of<RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsQuantityIncrementValueOne>
     * ) $value
     */
    #[JsonProperty('value'), Union('float', 'string')]
    public float|string $value;

    /**
     * @param array{
     *   unit: string,
     *   value: (
     *    float
     *   |value-of<RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsQuantityIncrementValueOne>
     * ),
     *   max?: (
     *    float
     *   |value-of<RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsQuantityIncrementMaxOne>
     * )|null,
     *   min?: (
     *    float
     *   |value-of<RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsQuantityIncrementMinOne>
     * )|null,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->max = $values['max'] ?? null;
        $this->min = $values['min'] ?? null;
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
