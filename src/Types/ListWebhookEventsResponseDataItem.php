<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class ListWebhookEventsResponseDataItem extends JsonSerializableType
{
    /**
     * @var string $apiVersion
     */
    #[JsonProperty('apiVersion')]
    public string $apiVersion;

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
     * @var bool $livemode
     */
    #[JsonProperty('livemode')]
    public bool $livemode;

    /**
     * @var value-of<ListWebhookEventsResponseDataItemObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var string $resourceId
     */
    #[JsonProperty('resourceId')]
    public string $resourceId;

    /**
     * @var string $resourceType
     */
    #[JsonProperty('resourceType')]
    public string $resourceType;

    /**
     * @var value-of<ListWebhookEventsResponseDataItemStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @param array{
     *   apiVersion: string,
     *   createdAt: string,
     *   eventType: string,
     *   id: string,
     *   livemode: bool,
     *   object: value-of<ListWebhookEventsResponseDataItemObject>,
     *   resourceId: string,
     *   resourceType: string,
     *   status: value-of<ListWebhookEventsResponseDataItemStatus>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiVersion = $values['apiVersion'];
        $this->createdAt = $values['createdAt'];
        $this->eventType = $values['eventType'];
        $this->id = $values['id'];
        $this->livemode = $values['livemode'];
        $this->object = $values['object'];
        $this->resourceId = $values['resourceId'];
        $this->resourceType = $values['resourceType'];
        $this->status = $values['status'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
