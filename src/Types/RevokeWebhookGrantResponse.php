<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class RevokeWebhookGrantResponse extends JsonSerializableType
{
    /**
     * @var value-of<RevokeWebhookGrantResponseObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var string $organizationId
     */
    #[JsonProperty('organizationId')]
    public string $organizationId;

    /**
     * @var string $platformId
     */
    #[JsonProperty('platformId')]
    public string $platformId;

    /**
     * @var bool $revoked
     */
    #[JsonProperty('revoked')]
    public bool $revoked;

    /**
     * @param array{
     *   object: value-of<RevokeWebhookGrantResponseObject>,
     *   organizationId: string,
     *   platformId: string,
     *   revoked: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->object = $values['object'];
        $this->organizationId = $values['organizationId'];
        $this->platformId = $values['platformId'];
        $this->revoked = $values['revoked'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
