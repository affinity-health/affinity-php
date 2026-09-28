<?php

namespace Affinity\Team\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Team\Types\ListPracticeTeamMembersRequestRole;
use Affinity\Team\Types\ListPracticeTeamMembersRequestStatus;

class ListPracticeTeamMembersRequest extends JsonSerializableType
{
    /**
     * @var ?int $limit
     */
    public ?int $limit;

    /**
     * @var ?string $startingAfter
     */
    public ?string $startingAfter;

    /**
     * @var ?string $endingBefore
     */
    public ?string $endingBefore;

    /**
     * @var ?string $search
     */
    public ?string $search;

    /**
     * @var ?value-of<ListPracticeTeamMembersRequestRole> $role
     */
    public ?string $role;

    /**
     * @var ?value-of<ListPracticeTeamMembersRequestStatus> $status
     */
    public ?string $status;

    /**
     * @param array{
     *   limit?: ?int,
     *   startingAfter?: ?string,
     *   endingBefore?: ?string,
     *   search?: ?string,
     *   role?: ?value-of<ListPracticeTeamMembersRequestRole>,
     *   status?: ?value-of<ListPracticeTeamMembersRequestStatus>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->startingAfter = $values['startingAfter'] ?? null;
        $this->endingBefore = $values['endingBefore'] ?? null;
        $this->search = $values['search'] ?? null;
        $this->role = $values['role'] ?? null;
        $this->status = $values['status'] ?? null;
    }
}
