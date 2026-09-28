<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class ListPracticeTeamInvitationsResponseDataItemPersonInvitation extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var value-of<ListPracticeTeamInvitationsResponseDataItemPersonInvitationStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var string $expiresAt
     */
    #[JsonProperty('expiresAt')]
    public string $expiresAt;

    /**
     * @var array<ListPracticeTeamInvitationsResponseDataItemPersonInvitationRolesItem> $roles
     */
    #[JsonProperty('roles'), ArrayType([ListPracticeTeamInvitationsResponseDataItemPersonInvitationRolesItem::class])]
    public array $roles;

    /**
     * @param array{
     *   id: string,
     *   status: value-of<ListPracticeTeamInvitationsResponseDataItemPersonInvitationStatus>,
     *   expiresAt: string,
     *   roles: array<ListPracticeTeamInvitationsResponseDataItemPersonInvitationRolesItem>,
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
