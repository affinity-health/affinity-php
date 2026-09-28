<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class RetrievePrescribingOptionsResponseTemplatesItemInitial extends JsonSerializableType
{
    /**
     * @var ?string $dose
     */
    #[JsonProperty('dose')]
    public ?string $dose;

    /**
     * @var ?string $doseUnit
     */
    #[JsonProperty('doseUnit')]
    public ?string $doseUnit;

    /**
     * @var ?string $duration
     */
    #[JsonProperty('duration')]
    public ?string $duration;

    /**
     * @var ?string $frequency
     */
    #[JsonProperty('frequency')]
    public ?string $frequency;

    /**
     * @var ?string $maxDailyUse
     */
    #[JsonProperty('maxDailyUse')]
    public ?string $maxDailyUse;

    /**
     * @var ?bool $prn
     */
    #[JsonProperty('prn')]
    public ?bool $prn;

    /**
     * @var ?string $route
     */
    #[JsonProperty('route')]
    public ?string $route;

    /**
     * @param array{
     *   dose?: ?string,
     *   doseUnit?: ?string,
     *   duration?: ?string,
     *   frequency?: ?string,
     *   maxDailyUse?: ?string,
     *   prn?: ?bool,
     *   route?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->dose = $values['dose'] ?? null;
        $this->doseUnit = $values['doseUnit'] ?? null;
        $this->duration = $values['duration'] ?? null;
        $this->frequency = $values['frequency'] ?? null;
        $this->maxDailyUse = $values['maxDailyUse'] ?? null;
        $this->prn = $values['prn'] ?? null;
        $this->route = $values['route'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
