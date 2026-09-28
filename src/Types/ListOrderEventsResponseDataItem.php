<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class ListOrderEventsResponseDataItem extends JsonSerializableType
{
    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $eventType
     */
    #[JsonProperty('eventType')]
    public string $eventType;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $message
     */
    #[JsonProperty('message')]
    public string $message;

    /**
     * @var array<string, mixed> $metadata
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    public array $metadata;

    /**
     * @var value-of<ListOrderEventsResponseDataItemObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @param array{
     *   createdAt: string,
     *   eventType: string,
     *   id: string,
     *   message: string,
     *   metadata: array<string, mixed>,
     *   object: value-of<ListOrderEventsResponseDataItemObject>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->createdAt = $values['createdAt'];
        $this->eventType = $values['eventType'];
        $this->id = $values['id'];
        $this->message = $values['message'];
        $this->metadata = $values['metadata'];
        $this->object = $values['object'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
