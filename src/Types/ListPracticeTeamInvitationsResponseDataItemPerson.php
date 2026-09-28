<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class ListPracticeTeamInvitationsResponseDataItemPerson extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var value-of<ListPracticeTeamInvitationsResponseDataItemPersonObject> $object
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
     * @var ?ListPracticeTeamInvitationsResponseDataItemPersonInvitation $invitation
     */
    #[JsonProperty('invitation')]
    public ?ListPracticeTeamInvitationsResponseDataItemPersonInvitation $invitation;

    /**
     * @var ?ListPracticeTeamInvitationsResponseDataItemPersonAccount $account
     */
    #[JsonProperty('account')]
    public ?ListPracticeTeamInvitationsResponseDataItemPersonAccount $account;

    /**
     * @var array<string> $nextActions
     */
    #[JsonProperty('nextActions'), ArrayType(['string'])]
    public array $nextActions;

    /**
     * @param array{
     *   id: string,
     *   object: value-of<ListPracticeTeamInvitationsResponseDataItemPersonObject>,
     *   externalId: string,
     *   status: string,
     *   nextActions: array<string>,
     *   email?: ?string,
     *   name?: ?string,
     *   invitation?: ?ListPracticeTeamInvitationsResponseDataItemPersonInvitation,
     *   account?: ?ListPracticeTeamInvitationsResponseDataItemPersonAccount,
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
