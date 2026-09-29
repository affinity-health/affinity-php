<?php

namespace Affinity\Patients\Addresses\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Patients\Addresses\Types\ListAddressesRequestStatus;

class ListAddressesRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<ListAddressesRequestStatus> $status
     */
    public ?string $status;

    /**
     * @var ?string $startingAfter
     */
    public ?string $startingAfter;

    /**
     * @var ?string $endingBefore
     */
    public ?string $endingBefore;

    /**
     * @var ?int $limit
     */
    public ?int $limit;

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
     *   status?: ?value-of<ListAddressesRequestStatus>,
     *   startingAfter?: ?string,
     *   endingBefore?: ?string,
     *   limit?: ?int,
     *   affinityActorId?: ?string,
     *   affinityActorType?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->status = $values['status'] ?? null;
        $this->startingAfter = $values['startingAfter'] ?? null;
        $this->endingBefore = $values['endingBefore'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->affinityActorId = $values['affinityActorId'] ?? null;
        $this->affinityActorType = $values['affinityActorType'] ?? null;
    }
}
