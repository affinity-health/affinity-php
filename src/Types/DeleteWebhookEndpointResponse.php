<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class DeleteWebhookEndpointResponse extends JsonSerializableType
{
    /**
     * @var string $organizationId
     */
    #[JsonProperty('organizationId')]
    public string $organizationId;

    /**
     * @var array<string> $practiceIds
     */
    #[JsonProperty('practiceIds'), ArrayType(['string'])]
    public array $practiceIds;

    /**
     * @var string $apiVersion
     */
    #[JsonProperty('apiVersion')]
    public string $apiVersion;

    /**
     * @var int $consecutiveFailures
     */
    #[JsonProperty('consecutiveFailures')]
    public int $consecutiveFailures;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $description
     */
    #[JsonProperty('description')]
    public string $description;

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
     * @var value-of<DeleteWebhookEndpointResponseObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var value-of<DeleteWebhookEndpointResponsePayloadStyle> $payloadStyle
     */
    #[JsonProperty('payloadStyle')]
    public string $payloadStyle;

    /**
     * @var value-of<DeleteWebhookEndpointResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var array<string> $subscribedEvents
     */
    #[JsonProperty('subscribedEvents'), ArrayType(['string'])]
    public array $subscribedEvents;

    /**
     * @var string $updatedAt
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @var string $url
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @param array{
     *   organizationId: string,
     *   practiceIds: array<string>,
     *   apiVersion: string,
     *   consecutiveFailures: int,
     *   createdAt: string,
     *   description: string,
     *   id: string,
     *   livemode: bool,
     *   object: value-of<DeleteWebhookEndpointResponseObject>,
     *   payloadStyle: value-of<DeleteWebhookEndpointResponsePayloadStyle>,
     *   status: value-of<DeleteWebhookEndpointResponseStatus>,
     *   subscribedEvents: array<string>,
     *   updatedAt: string,
     *   url: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->organizationId = $values['organizationId'];
        $this->practiceIds = $values['practiceIds'];
        $this->apiVersion = $values['apiVersion'];
        $this->consecutiveFailures = $values['consecutiveFailures'];
        $this->createdAt = $values['createdAt'];
        $this->description = $values['description'];
        $this->id = $values['id'];
        $this->livemode = $values['livemode'];
        $this->object = $values['object'];
        $this->payloadStyle = $values['payloadStyle'];
        $this->status = $values['status'];
        $this->subscribedEvents = $values['subscribedEvents'];
        $this->updatedAt = $values['updatedAt'];
        $this->url = $values['url'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
