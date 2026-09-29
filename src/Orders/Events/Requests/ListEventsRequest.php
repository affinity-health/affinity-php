<?php

namespace Affinity\Orders\Events\Requests;

use Affinity\Core\Json\JsonSerializableType;

class ListEventsRequest extends JsonSerializableType
{
    /**
     * @var ?string $endingBefore
     */
    public ?string $endingBefore;

    /**
     * @var ?int $limit
     */
    public ?int $limit;

    /**
     * @var ?string $startingAfter
     */
    public ?string $startingAfter;

    /**
     * @var ?string $affinityActorId Required for user actors and optional for system actors. Omit both actor headers to use the authenticated service account as a system actor.
     */
    public ?string $affinityActorId;

    /**
     * @var ?string $affinityActorType Use user when a person initiated the action and system for autonomous work. Omit both actor headers to default to system.
     */
    public ?string $affinityActorType;

    /**
     * @param array{
     *   endingBefore?: ?string,
     *   limit?: ?int,
     *   startingAfter?: ?string,
     *   affinityActorId?: ?string,
     *   affinityActorType?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->endingBefore = $values['endingBefore'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->startingAfter = $values['startingAfter'] ?? null;
        $this->affinityActorId = $values['affinityActorId'] ?? null;
        $this->affinityActorType = $values['affinityActorType'] ?? null;
    }
}
