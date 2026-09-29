<?php

namespace Affinity\Team\Members\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Team\Members\Types\UpdatePracticeTeamMemberRequestRole;
use Affinity\Core\Json\JsonProperty;
use Affinity\Team\Members\Types\UpdatePracticeTeamMemberRequestRolesItem;
use Affinity\Core\Types\ArrayType;
use Affinity\Team\Members\Types\UpdatePracticeTeamMemberRequestStatus;

class UpdatePracticeTeamMemberRequest extends JsonSerializableType
{
    /**
     * @var ?string $idempotencyKey Optional in the SDK. A fresh key is generated once per call when omitted. Supply a stable key to retry across calls.
     */
    public ?string $idempotencyKey;

    /**
     * @var ?value-of<UpdatePracticeTeamMemberRequestRole> $role
     */
    #[JsonProperty('role')]
    public ?string $role;

    /**
     * @var ?array<value-of<UpdatePracticeTeamMemberRequestRolesItem>> $roles
     */
    #[JsonProperty('roles'), ArrayType(['string'])]
    public ?array $roles;

    /**
     * @var ?value-of<UpdatePracticeTeamMemberRequestStatus> $status
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @var ?array<string> $locationIds Replace location access. An empty array grants access to all practice locations.
     */
    #[JsonProperty('locationIds'), ArrayType(['string'])]
    public ?array $locationIds;

    /**
     * @param array{
     *   idempotencyKey?: ?string,
     *   role?: ?value-of<UpdatePracticeTeamMemberRequestRole>,
     *   roles?: ?array<value-of<UpdatePracticeTeamMemberRequestRolesItem>>,
     *   status?: ?value-of<UpdatePracticeTeamMemberRequestStatus>,
     *   locationIds?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->idempotencyKey = $values['idempotencyKey'] ?? null;
        $this->role = $values['role'] ?? null;
        $this->roles = $values['roles'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->locationIds = $values['locationIds'] ?? null;
    }
}
