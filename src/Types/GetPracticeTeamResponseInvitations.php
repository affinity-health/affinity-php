<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\Union;

class GetPracticeTeamResponseInvitations extends JsonSerializableType
{
    /**
     * @var (
     *    float
     *   |value-of<GetPracticeTeamResponseInvitationsPendingOne>
     * ) $pending
     */
    #[JsonProperty('pending'), Union('float', 'string')]
    public float|string $pending;

    /**
     * @var (
     *    float
     *   |value-of<GetPracticeTeamResponseInvitationsExpiredOne>
     * ) $expired
     */
    #[JsonProperty('expired'), Union('float', 'string')]
    public float|string $expired;

    /**
     * @param array{
     *   pending: (
     *    float
     *   |value-of<GetPracticeTeamResponseInvitationsPendingOne>
     * ),
     *   expired: (
     *    float
     *   |value-of<GetPracticeTeamResponseInvitationsExpiredOne>
     * ),
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->pending = $values['pending'];
        $this->expired = $values['expired'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
