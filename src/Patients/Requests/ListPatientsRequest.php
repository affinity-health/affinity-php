<?php

namespace Affinity\Patients\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Patients\Types\ListPatientsRequestGender;
use Affinity\Patients\Types\ListPatientsRequestSort;
use Affinity\Patients\Types\ListPatientsRequestStatus;

class ListPatientsRequest extends JsonSerializableType
{
    /**
     * @var ?string $endingBefore
     */
    public ?string $endingBefore;

    /**
     * @var ?string $externalId
     */
    public ?string $externalId;

    /**
     * @var ?string $externalIdentitySource
     */
    public ?string $externalIdentitySource;

    /**
     * @var ?string $externalIdentityValue
     */
    public ?string $externalIdentityValue;

    /**
     * @var ?value-of<ListPatientsRequestGender> $gender
     */
    public ?string $gender;

    /**
     * @var ?string $lastOrderAfter
     */
    public ?string $lastOrderAfter;

    /**
     * @var ?string $lastOrderBefore
     */
    public ?string $lastOrderBefore;

    /**
     * @var ?int $limit
     */
    public ?int $limit;

    /**
     * @var ?string $program
     */
    public ?string $program;

    /**
     * @var ?string $query
     */
    public ?string $query;

    /**
     * @var ?value-of<ListPatientsRequestSort> $sort
     */
    public ?string $sort;

    /**
     * @var ?string $startingAfter
     */
    public ?string $startingAfter;

    /**
     * @var ?string $states
     */
    public ?string $states;

    /**
     * @var ?value-of<ListPatientsRequestStatus> $status
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
     *   endingBefore?: ?string,
     *   externalId?: ?string,
     *   externalIdentitySource?: ?string,
     *   externalIdentityValue?: ?string,
     *   gender?: ?value-of<ListPatientsRequestGender>,
     *   lastOrderAfter?: ?string,
     *   lastOrderBefore?: ?string,
     *   limit?: ?int,
     *   program?: ?string,
     *   query?: ?string,
     *   sort?: ?value-of<ListPatientsRequestSort>,
     *   startingAfter?: ?string,
     *   states?: ?string,
     *   status?: ?value-of<ListPatientsRequestStatus>,
     *   affinityActorId?: ?string,
     *   affinityActorType?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->endingBefore = $values['endingBefore'] ?? null;
        $this->externalId = $values['externalId'] ?? null;
        $this->externalIdentitySource = $values['externalIdentitySource'] ?? null;
        $this->externalIdentityValue = $values['externalIdentityValue'] ?? null;
        $this->gender = $values['gender'] ?? null;
        $this->lastOrderAfter = $values['lastOrderAfter'] ?? null;
        $this->lastOrderBefore = $values['lastOrderBefore'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->program = $values['program'] ?? null;
        $this->query = $values['query'] ?? null;
        $this->sort = $values['sort'] ?? null;
        $this->startingAfter = $values['startingAfter'] ?? null;
        $this->states = $values['states'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->affinityActorId = $values['affinityActorId'] ?? null;
        $this->affinityActorType = $values['affinityActorType'] ?? null;
    }
}
