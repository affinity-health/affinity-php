<?php

namespace Affinity\Team\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class InvitePracticeTeamPersonRequestProfileDetailsIdentifiersItem extends JsonSerializableType
{
    /**
     * @var string $identifier
     */
    #[JsonProperty('identifier')]
    public string $identifier;

    /**
     * @var string $issuer
     */
    #[JsonProperty('issuer')]
    public string $issuer;

    /**
     * @var string $state
     */
    #[JsonProperty('state')]
    public string $state;

    /**
     * @var string $description
     */
    #[JsonProperty('description')]
    public string $description;

    /**
     * @param array{
     *   identifier: string,
     *   issuer: string,
     *   state: string,
     *   description: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->identifier = $values['identifier'];
        $this->issuer = $values['issuer'];
        $this->state = $values['state'];
        $this->description = $values['description'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
