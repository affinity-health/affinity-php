<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class ResendPracticeTeamInvitationResponseInvitationPersonAccountPrescriberConnection extends JsonSerializableType
{
    /**
     * @var string $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ResendPracticeTeamInvitationResponseInvitationPersonAccountPrescriberConnectionProvider $provider
     */
    #[JsonProperty('provider')]
    public ResendPracticeTeamInvitationResponseInvitationPersonAccountPrescriberConnectionProvider $provider;

    /**
     * @param array{
     *   status: string,
     *   provider: ResendPracticeTeamInvitationResponseInvitationPersonAccountPrescriberConnectionProvider,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->status = $values['status'];
        $this->provider = $values['provider'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
