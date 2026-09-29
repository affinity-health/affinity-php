<?php

namespace Affinity\Webhooks\Endpoints\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;
use Affinity\Webhooks\Endpoints\Types\CreateWebhookEndpointRequestPayloadStyle;
use Affinity\Webhooks\Endpoints\Types\CreateWebhookEndpointRequestSubscribedEventsItem;

class CreateWebhookEndpointRequest extends JsonSerializableType
{
    /**
     * @var ?string $affinityOrganizationId Defaults to the API key organization. A platform may select a practice or pharmacy only with an explicit webhook grant in this mode. This changes the webhook owner, not the caller or event subscriptions.
     */
    public ?string $affinityOrganizationId;

    /**
     * @var string $idempotencyKey
     */
    public string $idempotencyKey;

    /**
     * @var ?array<string> $practiceIds
     */
    #[JsonProperty('practiceIds'), ArrayType(['string'])]
    public ?array $practiceIds;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?value-of<CreateWebhookEndpointRequestPayloadStyle> $payloadStyle
     */
    #[JsonProperty('payloadStyle')]
    public ?string $payloadStyle;

    /**
     * @var ?array<value-of<CreateWebhookEndpointRequestSubscribedEventsItem>> $subscribedEvents
     */
    #[JsonProperty('subscribedEvents'), ArrayType(['string'])]
    public ?array $subscribedEvents;

    /**
     * @var string $url
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @param array{
     *   idempotencyKey: string,
     *   url: string,
     *   affinityOrganizationId?: ?string,
     *   practiceIds?: ?array<string>,
     *   description?: ?string,
     *   payloadStyle?: ?value-of<CreateWebhookEndpointRequestPayloadStyle>,
     *   subscribedEvents?: ?array<value-of<CreateWebhookEndpointRequestSubscribedEventsItem>>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->affinityOrganizationId = $values['affinityOrganizationId'] ?? null;
        $this->idempotencyKey = $values['idempotencyKey'];
        $this->practiceIds = $values['practiceIds'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->payloadStyle = $values['payloadStyle'] ?? null;
        $this->subscribedEvents = $values['subscribedEvents'] ?? null;
        $this->url = $values['url'];
    }
}
