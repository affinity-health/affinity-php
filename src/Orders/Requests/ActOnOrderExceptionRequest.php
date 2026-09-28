<?php

namespace Affinity\Orders\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Orders\Types\ActOnOrderExceptionRequestAction;
use Affinity\Core\Json\JsonProperty;

class ActOnOrderExceptionRequest extends JsonSerializableType
{
    /**
     * @var string $idempotencyKey
     */
    public string $idempotencyKey;

    /**
     * @var ?string $affinityActorId Required for user actors and optional for system actors. Omit both actor headers to use the authenticated service account as a system actor.
     */
    public ?string $affinityActorId;

    /**
     * @var ?string $affinityActorType Use user when a person initiated the action and system for autonomous work. Omit both actor headers to default to system.
     */
    public ?string $affinityActorType;

    /**
     * @var value-of<ActOnOrderExceptionRequestAction> $action
     */
    #[JsonProperty('action')]
    public string $action;

    /**
     * @var ?string $note
     */
    #[JsonProperty('note')]
    public ?string $note;

    /**
     * @param array{
     *   idempotencyKey: string,
     *   action: value-of<ActOnOrderExceptionRequestAction>,
     *   affinityActorId?: ?string,
     *   affinityActorType?: ?string,
     *   note?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->idempotencyKey = $values['idempotencyKey'];
        $this->affinityActorId = $values['affinityActorId'] ?? null;
        $this->affinityActorType = $values['affinityActorType'] ?? null;
        $this->action = $values['action'];
        $this->note = $values['note'] ?? null;
    }
}
