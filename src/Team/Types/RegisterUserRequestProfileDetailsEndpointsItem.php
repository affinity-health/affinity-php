<?php

namespace Affinity\Team\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class RegisterUserRequestProfileDetailsEndpointsItem extends JsonSerializableType
{
    /**
     * @var string $endpoint
     */
    #[JsonProperty('endpoint')]
    public string $endpoint;

    /**
     * @var string $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $description
     */
    #[JsonProperty('description')]
    public string $description;

    /**
     * @var string $use
     */
    #[JsonProperty('use')]
    public string $use;

    /**
     * @var string $affiliation
     */
    #[JsonProperty('affiliation')]
    public string $affiliation;

    /**
     * @param array{
     *   endpoint: string,
     *   type: string,
     *   description: string,
     *   use: string,
     *   affiliation: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->endpoint = $values['endpoint'];
        $this->type = $values['type'];
        $this->description = $values['description'];
        $this->use = $values['use'];
        $this->affiliation = $values['affiliation'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
