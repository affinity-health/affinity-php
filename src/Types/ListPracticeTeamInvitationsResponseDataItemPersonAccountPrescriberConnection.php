<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class ListPracticeTeamInvitationsResponseDataItemPersonAccountPrescriberConnection extends JsonSerializableType
{
    /**
     * @var string $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ListPracticeTeamInvitationsResponseDataItemPersonAccountPrescriberConnectionProvider $provider
     */
    #[JsonProperty('provider')]
    public ListPracticeTeamInvitationsResponseDataItemPersonAccountPrescriberConnectionProvider $provider;

    /**
     * @param array{
     *   status: string,
     *   provider: ListPracticeTeamInvitationsResponseDataItemPersonAccountPrescriberConnectionProvider,
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
