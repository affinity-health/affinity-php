<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class RevokePracticeTeamInvitationResponsePersonAccount extends JsonSerializableType
{
    /**
     * @var string $accountId
     */
    #[JsonProperty('accountId')]
    public string $accountId;

    /**
     * @var bool $emailVerified
     */
    #[JsonProperty('emailVerified')]
    public bool $emailVerified;

    /**
     * @var string $membershipId
     */
    #[JsonProperty('membershipId')]
    public string $membershipId;

    /**
     * @var string $membershipStatus
     */
    #[JsonProperty('membershipStatus')]
    public string $membershipStatus;

    /**
     * @var array<RevokePracticeTeamInvitationResponsePersonAccountRolesItem> $roles
     */
    #[JsonProperty('roles'), ArrayType([RevokePracticeTeamInvitationResponsePersonAccountRolesItem::class])]
    public array $roles;

    /**
     * @var ?RevokePracticeTeamInvitationResponsePersonAccountPrescriberConnection $prescriberConnection
     */
    #[JsonProperty('prescriberConnection')]
    public ?RevokePracticeTeamInvitationResponsePersonAccountPrescriberConnection $prescriberConnection;

    /**
     * @param array{
     *   accountId: string,
     *   emailVerified: bool,
     *   membershipId: string,
     *   membershipStatus: string,
     *   roles: array<RevokePracticeTeamInvitationResponsePersonAccountRolesItem>,
     *   prescriberConnection?: ?RevokePracticeTeamInvitationResponsePersonAccountPrescriberConnection,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->accountId = $values['accountId'];
        $this->emailVerified = $values['emailVerified'];
        $this->membershipId = $values['membershipId'];
        $this->membershipStatus = $values['membershipStatus'];
        $this->roles = $values['roles'];
        $this->prescriberConnection = $values['prescriberConnection'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
