<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class GetOrderTestSimulationResponse extends JsonSerializableType
{
    /**
     * @var value-of<GetOrderTestSimulationResponseMode> $mode
     */
    #[JsonProperty('mode')]
    public string $mode;

    /**
     * @var value-of<GetOrderTestSimulationResponseScenario> $scenario
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
     * @var array<value-of<GetOrderTestSimulationResponseAvailableActionsItem>> $availableActions
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
     *   mode: value-of<GetOrderTestSimulationResponseMode>,
     *   scenario: value-of<GetOrderTestSimulationResponseScenario>,
     *   availableActions: array<value-of<GetOrderTestSimulationResponseAvailableActionsItem>>,
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
