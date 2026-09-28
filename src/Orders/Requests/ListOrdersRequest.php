<?php

namespace Affinity\Orders\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Orders\Types\ListOrdersRequestSort;
use Affinity\Orders\Types\ListOrdersRequestStatus;

class ListOrdersRequest extends JsonSerializableType
{
    /**
     * @var ?string $query
     */
    public ?string $query;

    /**
     * @var ?string $externalOrderId
     */
    public ?string $externalOrderId;

    /**
     * @var ?string $createdAfter
     */
    public ?string $createdAfter;

    /**
     * @var ?string $createdBefore
     */
    public ?string $createdBefore;

    /**
     * @var ?string $endingBefore
     */
    public ?string $endingBefore;

    /**
     * @var ?int $limit
     */
    public ?int $limit;

    /**
     * @var ?string $orderId
     */
    public ?string $orderId;

    /**
     * @var ?string $patientId
     */
    public ?string $patientId;

    /**
     * @var ?string $patientExternalId
     */
    public ?string $patientExternalId;

    /**
     * @var ?string $practiceId
     */
    public ?string $practiceId;

    /**
     * @var ?value-of<ListOrdersRequestSort> $sort
     */
    public ?string $sort;

    /**
     * @var ?string $startingAfter
     */
    public ?string $startingAfter;

    /**
     * @var ?value-of<ListOrdersRequestStatus> $status
     */
    public ?string $status;

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
     *   query?: ?string,
     *   externalOrderId?: ?string,
     *   createdAfter?: ?string,
     *   createdBefore?: ?string,
     *   endingBefore?: ?string,
     *   limit?: ?int,
     *   orderId?: ?string,
     *   patientId?: ?string,
     *   patientExternalId?: ?string,
     *   practiceId?: ?string,
     *   sort?: ?value-of<ListOrdersRequestSort>,
     *   startingAfter?: ?string,
     *   status?: ?value-of<ListOrdersRequestStatus>,
     *   affinityActorId?: ?string,
     *   affinityActorType?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->query = $values['query'] ?? null;
        $this->externalOrderId = $values['externalOrderId'] ?? null;
        $this->createdAfter = $values['createdAfter'] ?? null;
        $this->createdBefore = $values['createdBefore'] ?? null;
        $this->endingBefore = $values['endingBefore'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->orderId = $values['orderId'] ?? null;
        $this->patientId = $values['patientId'] ?? null;
        $this->patientExternalId = $values['patientExternalId'] ?? null;
        $this->practiceId = $values['practiceId'] ?? null;
        $this->sort = $values['sort'] ?? null;
        $this->startingAfter = $values['startingAfter'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->affinityActorId = $values['affinityActorId'] ?? null;
        $this->affinityActorType = $values['affinityActorType'] ?? null;
    }
}
