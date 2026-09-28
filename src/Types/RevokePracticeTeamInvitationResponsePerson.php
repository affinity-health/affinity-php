<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class RevokePracticeTeamInvitationResponsePerson extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var value-of<RevokePracticeTeamInvitationResponsePersonObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var string $externalId
     */
    #[JsonProperty('externalId')]
    public string $externalId;

    /**
     * @var ?string $email
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var string $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?RevokePracticeTeamInvitationResponsePersonInvitation $invitation
     */
    #[JsonProperty('invitation')]
    public ?RevokePracticeTeamInvitationResponsePersonInvitation $invitation;

    /**
     * @var ?RevokePracticeTeamInvitationResponsePersonAccount $account
     */
    #[JsonProperty('account')]
    public ?RevokePracticeTeamInvitationResponsePersonAccount $account;

    /**
     * @var array<string> $nextActions
     */
    #[JsonProperty('nextActions'), ArrayType(['string'])]
    public array $nextActions;

    /**
     * @param array{
     *   id: string,
     *   object: value-of<RevokePracticeTeamInvitationResponsePersonObject>,
     *   externalId: string,
     *   status: string,
     *   nextActions: array<string>,
     *   email?: ?string,
     *   name?: ?string,
     *   invitation?: ?RevokePracticeTeamInvitationResponsePersonInvitation,
     *   account?: ?RevokePracticeTeamInvitationResponsePersonAccount,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->object = $values['object'];
        $this->externalId = $values['externalId'];
        $this->email = $values['email'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->status = $values['status'];
        $this->invitation = $values['invitation'] ?? null;
        $this->account = $values['account'] ?? null;
        $this->nextActions = $values['nextActions'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
