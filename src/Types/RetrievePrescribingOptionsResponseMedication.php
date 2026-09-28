<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class RetrievePrescribingOptionsResponseMedication extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?RetrievePrescribingOptionsResponseMedicationRxnorm $rxnorm
     */
    #[JsonProperty('rxnorm')]
    public ?RetrievePrescribingOptionsResponseMedicationRxnorm $rxnorm;

    /**
     * @param array{
     *   name: string,
     *   rxnorm?: ?RetrievePrescribingOptionsResponseMedicationRxnorm,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->rxnorm = $values['rxnorm'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
