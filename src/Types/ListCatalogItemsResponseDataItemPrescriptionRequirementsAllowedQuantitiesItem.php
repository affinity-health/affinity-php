<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\Union;

class ListCatalogItemsResponseDataItemPrescriptionRequirementsAllowedQuantitiesItem extends JsonSerializableType
{
    /**
     * @var ?int $daysSupply
     */
    #[JsonProperty('daysSupply')]
    public ?int $daysSupply;

    /**
     * @var string $label
     */
    #[JsonProperty('label')]
    public string $label;

    /**
     * @var string $unit
     */
    #[JsonProperty('unit')]
    public string $unit;

    /**
     * @var (
     *    float
     *   |value-of<ListCatalogItemsResponseDataItemPrescriptionRequirementsAllowedQuantitiesItemValueOne>
     * ) $value
     */
    #[JsonProperty('value'), Union('float', 'string')]
    public float|string $value;

    /**
     * @param array{
     *   label: string,
     *   unit: string,
     *   value: (
     *    float
     *   |value-of<ListCatalogItemsResponseDataItemPrescriptionRequirementsAllowedQuantitiesItemValueOne>
     * ),
     *   daysSupply?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->daysSupply = $values['daysSupply'] ?? null;
        $this->label = $values['label'];
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
