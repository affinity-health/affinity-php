<?php

namespace Affinity\Team\Members\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Team\Members\Types\ListMembersRequestRole;
use Affinity\Team\Members\Types\ListMembersRequestStatus;

class ListMembersRequest extends JsonSerializableType
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
     * @var ?value-of<ListMembersRequestRole> $role
     */
    public ?string $role;

    /**
     * @var ?value-of<ListMembersRequestStatus> $status
     */
    public ?string $status;

    /**
     * @param array{
     *   limit?: ?int,
     *   startingAfter?: ?string,
     *   endingBefore?: ?string,
     *   search?: ?string,
     *   role?: ?value-of<ListMembersRequestRole>,
     *   status?: ?value-of<ListMembersRequestStatus>,
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
