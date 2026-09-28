<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class GetPracticeTeamMemberResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $externalId This integration's external ID for the accepted invitee in the API key's mode. Null for members invited outside this integration.
     */
    #[JsonProperty('externalId')]
    public ?string $externalId;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $email
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var array<string> $locationIds
     */
    #[JsonProperty('locationIds'), ArrayType(['string'])]
    public array $locationIds;

    /**
     * @var GetPracticeTeamMemberResponseAccount $account
     */
    #[JsonProperty('account')]
    public GetPracticeTeamMemberResponseAccount $account;

    /**
     * @var array<string> $nextActions
     */
    #[JsonProperty('nextActions'), ArrayType(['string'])]
    public array $nextActions;

    /**
     * @param array{
     *   id: string,
     *   name: string,
     *   locationIds: array<string>,
     *   account: GetPracticeTeamMemberResponseAccount,
     *   nextActions: array<string>,
     *   externalId?: ?string,
     *   email?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->externalId = $values['externalId'] ?? null;
        $this->name = $values['name'];
        $this->email = $values['email'] ?? null;
        $this->locationIds = $values['locationIds'];
        $this->account = $values['account'];
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
