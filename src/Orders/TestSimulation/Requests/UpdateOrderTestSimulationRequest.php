<?php

namespace Affinity\Orders\TestSimulation\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Orders\TestSimulation\Types\UpdateOrderTestSimulationRequestMode;
use Affinity\Core\Json\JsonProperty;
use Affinity\Orders\TestSimulation\Types\UpdateOrderTestSimulationRequestScenario;
use Affinity\Orders\TestSimulation\Types\UpdateOrderTestSimulationRequestAction;

class UpdateOrderTestSimulationRequest extends JsonSerializableType
{
    /**
     * @var string $idempotencyKey
     */
    public string $idempotencyKey;

    /**
     * @var value-of<UpdateOrderTestSimulationRequestMode> $mode
     */
    #[JsonProperty('mode')]
    public string $mode;

    /**
     * @var value-of<UpdateOrderTestSimulationRequestScenario> $scenario
     */
    #[JsonProperty('scenario')]
    public string $scenario;

    /**
     * @var ?value-of<UpdateOrderTestSimulationRequestAction> $action
     */
    #[JsonProperty('action')]
    public ?string $action;

    /**
     * @param array{
     *   idempotencyKey: string,
     *   mode: value-of<UpdateOrderTestSimulationRequestMode>,
     *   scenario: value-of<UpdateOrderTestSimulationRequestScenario>,
     *   action?: ?value-of<UpdateOrderTestSimulationRequestAction>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->idempotencyKey = $values['idempotencyKey'];
        $this->mode = $values['mode'];
        $this->scenario = $values['scenario'];
        $this->action = $values['action'] ?? null;
    }
}
