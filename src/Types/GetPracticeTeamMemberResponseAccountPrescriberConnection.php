<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class GetPracticeTeamMemberResponseAccountPrescriberConnection extends JsonSerializableType
{
    /**
     * @var string $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var GetPracticeTeamMemberResponseAccountPrescriberConnectionProvider $provider
     */
    #[JsonProperty('provider')]
    public GetPracticeTeamMemberResponseAccountPrescriberConnectionProvider $provider;

    /**
     * @param array{
     *   status: string,
     *   provider: GetPracticeTeamMemberResponseAccountPrescriberConnectionProvider,
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
