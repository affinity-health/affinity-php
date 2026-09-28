<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class ListPracticeTeamMembersResponseDataItemAccountPrescriberConnection extends JsonSerializableType
{
    /**
     * @var string $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ListPracticeTeamMembersResponseDataItemAccountPrescriberConnectionProvider $provider
     */
    #[JsonProperty('provider')]
    public ListPracticeTeamMembersResponseDataItemAccountPrescriberConnectionProvider $provider;

    /**
     * @param array{
     *   status: string,
     *   provider: ListPracticeTeamMembersResponseDataItemAccountPrescriberConnectionProvider,
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
