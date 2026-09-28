<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class ResendPracticeTeamInvitationResponse extends JsonSerializableType
{
    /**
     * @var ResendPracticeTeamInvitationResponseInvitation $invitation
     */
    #[JsonProperty('invitation')]
    public ResendPracticeTeamInvitationResponseInvitation $invitation;

    /**
     * @var value-of<ResendPracticeTeamInvitationResponseDelivery> $delivery
     */
    #[JsonProperty('delivery')]
    public string $delivery;

    /**
     * @param array{
     *   invitation: ResendPracticeTeamInvitationResponseInvitation,
     *   delivery: value-of<ResendPracticeTeamInvitationResponseDelivery>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->invitation = $values['invitation'];
        $this->delivery = $values['delivery'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
