<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class RevokePracticeTeamInvitationResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var value-of<RevokePracticeTeamInvitationResponseObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var string $email
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var value-of<RevokePracticeTeamInvitationResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var array<RevokePracticeTeamInvitationResponseRolesItem> $roles
     */
    #[JsonProperty('roles'), ArrayType([RevokePracticeTeamInvitationResponseRolesItem::class])]
    public array $roles;

    /**
     * @var array<string> $locationIds
     */
    #[JsonProperty('locationIds'), ArrayType(['string'])]
    public array $locationIds;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $expiresAt
     */
    #[JsonProperty('expiresAt')]
    public string $expiresAt;

    /**
     * @var ?string $acceptedAt
     */
    #[JsonProperty('acceptedAt')]
    public ?string $acceptedAt;

    /**
     * @var ?string $userId This integration's mode-scoped user ID, used for draft attribution and sessions after acceptance. Null for invitations outside this integration.
     */
    #[JsonProperty('userId')]
    public ?string $userId;

    /**
     * @var ?string $externalId
     */
    #[JsonProperty('externalId')]
    public ?string $externalId;

    /**
     * @var ?string $memberId
     */
    #[JsonProperty('memberId')]
    public ?string $memberId;

    /**
     * @var ?string $prescriberId
     */
    #[JsonProperty('prescriberId')]
    public ?string $prescriberId;

    /**
     * @var ?RevokePracticeTeamInvitationResponsePerson $person This integration's current onboarding and account-connection state. Null for invitations outside this integration.
     */
    #[JsonProperty('person')]
    public ?RevokePracticeTeamInvitationResponsePerson $person;

    /**
     * @param array{
     *   id: string,
     *   object: value-of<RevokePracticeTeamInvitationResponseObject>,
     *   email: string,
     *   status: value-of<RevokePracticeTeamInvitationResponseStatus>,
     *   roles: array<RevokePracticeTeamInvitationResponseRolesItem>,
     *   locationIds: array<string>,
     *   createdAt: string,
     *   expiresAt: string,
     *   name?: ?string,
     *   acceptedAt?: ?string,
     *   userId?: ?string,
     *   externalId?: ?string,
     *   memberId?: ?string,
     *   prescriberId?: ?string,
     *   person?: ?RevokePracticeTeamInvitationResponsePerson,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->object = $values['object'];
        $this->email = $values['email'];
        $this->name = $values['name'] ?? null;
        $this->status = $values['status'];
        $this->roles = $values['roles'];
        $this->locationIds = $values['locationIds'];
        $this->createdAt = $values['createdAt'];
        $this->expiresAt = $values['expiresAt'];
        $this->acceptedAt = $values['acceptedAt'] ?? null;
        $this->userId = $values['userId'] ?? null;
        $this->externalId = $values['externalId'] ?? null;
        $this->memberId = $values['memberId'] ?? null;
        $this->prescriberId = $values['prescriberId'] ?? null;
        $this->person = $values['person'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
