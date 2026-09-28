<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class ListOrdersResponseDataItemLifecycleEventsItem extends JsonSerializableType
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
     * @var value-of<ListOrdersResponseDataItemLifecycleEventsItemSource> $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @param array{
     *   createdAt: string,
     *   eventType: string,
     *   id: string,
     *   message: string,
     *   source: value-of<ListOrdersResponseDataItemLifecycleEventsItemSource>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->createdAt = $values['createdAt'];
        $this->eventType = $values['eventType'];
        $this->id = $values['id'];
        $this->message = $values['message'];
        $this->source = $values['source'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
