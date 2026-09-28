<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class RetrievePrescribingOptionsResponseMedicationRxnorm extends JsonSerializableType
{
    /**
     * @var string $code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var string $display
     */
    #[JsonProperty('display')]
    public string $display;

    /**
     * @var string $doseForm
     */
    #[JsonProperty('doseForm')]
    public string $doseForm;

    /**
     * @var string $route
     */
    #[JsonProperty('route')]
    public string $route;

    /**
     * @var value-of<RetrievePrescribingOptionsResponseMedicationRxnormSystem> $system
     */
    #[JsonProperty('system')]
    public string $system;

    /**
     * @param array{
     *   code: string,
     *   display: string,
     *   doseForm: string,
     *   route: string,
     *   system: value-of<RetrievePrescribingOptionsResponseMedicationRxnormSystem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->display = $values['display'];
        $this->doseForm = $values['doseForm'];
        $this->route = $values['route'];
        $this->system = $values['system'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
