<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class RetrievePrescribingOptionsResponseOptions extends JsonSerializableType
{
    /**
     * @var array<RetrievePrescribingOptionsResponseOptionsDoseUnitsItem> $doseUnits
     */
    #[JsonProperty('doseUnits'), ArrayType([RetrievePrescribingOptionsResponseOptionsDoseUnitsItem::class])]
    public array $doseUnits;

    /**
     * @var array<RetrievePrescribingOptionsResponseOptionsDosesItem> $doses
     */
    #[JsonProperty('doses'), ArrayType([RetrievePrescribingOptionsResponseOptionsDosesItem::class])]
    public array $doses;

    /**
     * @var array<RetrievePrescribingOptionsResponseOptionsFrequenciesItem> $frequencies
     */
    #[JsonProperty('frequencies'), ArrayType([RetrievePrescribingOptionsResponseOptionsFrequenciesItem::class])]
    public array $frequencies;

    /**
     * @var array<RetrievePrescribingOptionsResponseOptionsRoutesItem> $routes
     */
    #[JsonProperty('routes'), ArrayType([RetrievePrescribingOptionsResponseOptionsRoutesItem::class])]
    public array $routes;

    /**
     * @param array{
     *   doseUnits: array<RetrievePrescribingOptionsResponseOptionsDoseUnitsItem>,
     *   doses: array<RetrievePrescribingOptionsResponseOptionsDosesItem>,
     *   frequencies: array<RetrievePrescribingOptionsResponseOptionsFrequenciesItem>,
     *   routes: array<RetrievePrescribingOptionsResponseOptionsRoutesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->doseUnits = $values['doseUnits'];
        $this->doses = $values['doses'];
        $this->frequencies = $values['frequencies'];
        $this->routes = $values['routes'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
