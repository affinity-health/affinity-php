<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class RevokePracticeTeamInvitationResponsePersonInvitation extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var value-of<RevokePracticeTeamInvitationResponsePersonInvitationStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var string $expiresAt
     */
    #[JsonProperty('expiresAt')]
    public string $expiresAt;

    /**
     * @var array<RevokePracticeTeamInvitationResponsePersonInvitationRolesItem> $roles
     */
    #[JsonProperty('roles'), ArrayType([RevokePracticeTeamInvitationResponsePersonInvitationRolesItem::class])]
    public array $roles;

    /**
     * @param array{
     *   id: string,
     *   status: value-of<RevokePracticeTeamInvitationResponsePersonInvitationStatus>,
     *   expiresAt: string,
     *   roles: array<RevokePracticeTeamInvitationResponsePersonInvitationRolesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->status = $values['status'];
        $this->expiresAt = $values['expiresAt'];
        $this->roles = $values['roles'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
