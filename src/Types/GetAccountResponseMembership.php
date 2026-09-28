<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class GetAccountResponseMembership extends JsonSerializableType
{
    /**
     * @var array<string> $permissions Effective API scopes for a service key; dashboard permissions for a signed-in member.
     */
    #[JsonProperty('permissions'), ArrayType(['string'])]
    public array $permissions;

    /**
     * @var value-of<GetAccountResponseMembershipRole> $role
     */
    #[JsonProperty('role')]
    public string $role;

    /**
     * @var string $roleName
     */
    #[JsonProperty('roleName')]
    public string $roleName;

    /**
     * @var value-of<GetAccountResponseMembershipStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @param array{
     *   permissions: array<string>,
     *   role: value-of<GetAccountResponseMembershipRole>,
     *   roleName: string,
     *   status: value-of<GetAccountResponseMembershipStatus>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->permissions = $values['permissions'];
        $this->role = $values['role'];
        $this->roleName = $values['roleName'];
        $this->status = $values['status'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
