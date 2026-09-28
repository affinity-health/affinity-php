<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class TestWebhookEndpointResponse extends JsonSerializableType
{
    /**
     * @var string $eventId
     */
    #[JsonProperty('eventId')]
    public string $eventId;

    /**
     * @param array{
     *   eventId: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->eventId = $values['eventId'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
