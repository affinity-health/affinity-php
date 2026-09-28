<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class ReplayWebhookEventResponse extends JsonSerializableType
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
     * @var value-of<ReplayWebhookEventResponseObject> $object
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
     * @var value-of<ReplayWebhookEventResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var array<ReplayWebhookEventResponseAttemptsItem> $attempts
     */
    #[JsonProperty('attempts'), ArrayType([ReplayWebhookEventResponseAttemptsItem::class])]
    public array $attempts;

    /**
     * @var array<ReplayWebhookEventResponseDeliveriesItem> $deliveries
     */
    #[JsonProperty('deliveries'), ArrayType([ReplayWebhookEventResponseDeliveriesItem::class])]
    public array $deliveries;

    /**
     * @var array<string, mixed> $payload
     */
    #[JsonProperty('payload'), ArrayType(['string' => 'mixed'])]
    public array $payload;

    /**
     * @param array{
     *   apiVersion: string,
     *   createdAt: string,
     *   eventType: string,
     *   id: string,
     *   livemode: bool,
     *   object: value-of<ReplayWebhookEventResponseObject>,
     *   resourceId: string,
     *   resourceType: string,
     *   status: value-of<ReplayWebhookEventResponseStatus>,
     *   attempts: array<ReplayWebhookEventResponseAttemptsItem>,
     *   deliveries: array<ReplayWebhookEventResponseDeliveriesItem>,
     *   payload: array<string, mixed>,
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
        $this->attempts = $values['attempts'];
        $this->deliveries = $values['deliveries'];
        $this->payload = $values['payload'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
