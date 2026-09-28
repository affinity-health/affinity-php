<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class RetrievePrescribingOptionsResponseFormulationDefaultStructuredSig extends JsonSerializableType
{
    /**
     * @var string $dose
     */
    #[JsonProperty('dose')]
    public string $dose;

    /**
     * @var string $doseUnit
     */
    #[JsonProperty('doseUnit')]
    public string $doseUnit;

    /**
     * @var ?string $duration
     */
    #[JsonProperty('duration')]
    public ?string $duration;

    /**
     * @var string $frequency
     */
    #[JsonProperty('frequency')]
    public string $frequency;

    /**
     * @var ?string $maxDailyUse
     */
    #[JsonProperty('maxDailyUse')]
    public ?string $maxDailyUse;

    /**
     * @var bool $prn
     */
    #[JsonProperty('prn')]
    public bool $prn;

    /**
     * @var string $route
     */
    #[JsonProperty('route')]
    public string $route;

    /**
     * @var ?string $titrationSchedule
     */
    #[JsonProperty('titrationSchedule')]
    public ?string $titrationSchedule;

    /**
     * @param array{
     *   dose: string,
     *   doseUnit: string,
     *   frequency: string,
     *   prn: bool,
     *   route: string,
     *   duration?: ?string,
     *   maxDailyUse?: ?string,
     *   titrationSchedule?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->dose = $values['dose'];
        $this->doseUnit = $values['doseUnit'];
        $this->duration = $values['duration'] ?? null;
        $this->frequency = $values['frequency'];
        $this->maxDailyUse = $values['maxDailyUse'] ?? null;
        $this->prn = $values['prn'];
        $this->route = $values['route'];
        $this->titrationSchedule = $values['titrationSchedule'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
