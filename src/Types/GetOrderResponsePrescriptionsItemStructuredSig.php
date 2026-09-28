<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class GetOrderResponsePrescriptionsItemStructuredSig extends JsonSerializableType
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
     * @var string $frequency
     */
    #[JsonProperty('frequency')]
    public string $frequency;

    /**
     * @var string $route
     */
    #[JsonProperty('route')]
    public string $route;

    /**
     * @var bool $prn
     */
    #[JsonProperty('prn')]
    public bool $prn;

    /**
     * @var ?string $duration
     */
    #[JsonProperty('duration')]
    public ?string $duration;

    /**
     * @var ?string $indication
     */
    #[JsonProperty('indication')]
    public ?string $indication;

    /**
     * @var ?string $maxDailyUse
     */
    #[JsonProperty('maxDailyUse')]
    public ?string $maxDailyUse;

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
     *   route: string,
     *   prn: bool,
     *   duration?: ?string,
     *   indication?: ?string,
     *   maxDailyUse?: ?string,
     *   titrationSchedule?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->dose = $values['dose'];
        $this->doseUnit = $values['doseUnit'];
        $this->frequency = $values['frequency'];
        $this->route = $values['route'];
        $this->prn = $values['prn'];
        $this->duration = $values['duration'] ?? null;
        $this->indication = $values['indication'] ?? null;
        $this->maxDailyUse = $values['maxDailyUse'] ?? null;
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
