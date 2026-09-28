<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\Union;

class ListCatalogItemsResponseDataItemPrescriptionRequirementsQuantityIncrement extends JsonSerializableType
{
    /**
     * @var (
     *    float
     *   |value-of<ListCatalogItemsResponseDataItemPrescriptionRequirementsQuantityIncrementMaxOne>
     * )|null $max
     */
    #[JsonProperty('max'), Union('float', 'string', 'null')]
    public float|string|null $max;

    /**
     * @var (
     *    float
     *   |value-of<ListCatalogItemsResponseDataItemPrescriptionRequirementsQuantityIncrementMinOne>
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
     *   |value-of<ListCatalogItemsResponseDataItemPrescriptionRequirementsQuantityIncrementValueOne>
     * ) $value
     */
    #[JsonProperty('value'), Union('float', 'string')]
    public float|string $value;

    /**
     * @param array{
     *   unit: string,
     *   value: (
     *    float
     *   |value-of<ListCatalogItemsResponseDataItemPrescriptionRequirementsQuantityIncrementValueOne>
     * ),
     *   max?: (
     *    float
     *   |value-of<ListCatalogItemsResponseDataItemPrescriptionRequirementsQuantityIncrementMaxOne>
     * )|null,
     *   min?: (
     *    float
     *   |value-of<ListCatalogItemsResponseDataItemPrescriptionRequirementsQuantityIncrementMinOne>
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
