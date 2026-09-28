<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class UpdateOrderTestSimulationResponse extends JsonSerializableType
{
    /**
     * @var value-of<UpdateOrderTestSimulationResponseMode> $mode
     */
    #[JsonProperty('mode')]
    public string $mode;

    /**
     * @var value-of<UpdateOrderTestSimulationResponseScenario> $scenario
     */
    #[JsonProperty('scenario')]
    public string $scenario;

    /**
     * @var ?string $pendingAction
     */
    #[JsonProperty('pendingAction')]
    public ?string $pendingAction;

    /**
     * @var ?string $lastError
     */
    #[JsonProperty('lastError')]
    public ?string $lastError;

    /**
     * @var array<value-of<UpdateOrderTestSimulationResponseAvailableActionsItem>> $availableActions
     */
    #[JsonProperty('availableActions'), ArrayType(['string'])]
    public array $availableActions;

    /**
     * @var bool $scenarioEditable
     */
    #[JsonProperty('scenarioEditable')]
    public bool $scenarioEditable;

    /**
     * @param array{
     *   mode: value-of<UpdateOrderTestSimulationResponseMode>,
     *   scenario: value-of<UpdateOrderTestSimulationResponseScenario>,
     *   availableActions: array<value-of<UpdateOrderTestSimulationResponseAvailableActionsItem>>,
     *   scenarioEditable: bool,
     *   pendingAction?: ?string,
     *   lastError?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->mode = $values['mode'];
        $this->scenario = $values['scenario'];
        $this->pendingAction = $values['pendingAction'] ?? null;
        $this->lastError = $values['lastError'] ?? null;
        $this->availableActions = $values['availableActions'];
        $this->scenarioEditable = $values['scenarioEditable'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
