<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class GetPracticeTeamResponse extends JsonSerializableType
{
    /**
     * @var value-of<GetPracticeTeamResponseObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var string $practiceId
     */
    #[JsonProperty('practiceId')]
    public string $practiceId;

    /**
     * @var GetPracticeTeamResponseMembers $members
     */
    #[JsonProperty('members')]
    public GetPracticeTeamResponseMembers $members;

    /**
     * @var GetPracticeTeamResponseInvitations $invitations
     */
    #[JsonProperty('invitations')]
    public GetPracticeTeamResponseInvitations $invitations;

    /**
     * @var GetPracticeTeamResponsePrescribers $prescribers
     */
    #[JsonProperty('prescribers')]
    public GetPracticeTeamResponsePrescribers $prescribers;

    /**
     * @param array{
     *   object: value-of<GetPracticeTeamResponseObject>,
     *   practiceId: string,
     *   members: GetPracticeTeamResponseMembers,
     *   invitations: GetPracticeTeamResponseInvitations,
     *   prescribers: GetPracticeTeamResponsePrescribers,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->object = $values['object'];
        $this->practiceId = $values['practiceId'];
        $this->members = $values['members'];
        $this->invitations = $values['invitations'];
        $this->prescribers = $values['prescribers'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
