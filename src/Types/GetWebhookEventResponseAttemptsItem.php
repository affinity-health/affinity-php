<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\Union;

class GetWebhookEventResponseAttemptsItem extends JsonSerializableType
{
    /**
     * @var string $deliveryId
     */
    #[JsonProperty('deliveryId')]
    public string $deliveryId;

    /**
     * @var string $endpointId
     */
    #[JsonProperty('endpointId')]
    public string $endpointId;

    /**
     * @var int $attemptNumber
     */
    #[JsonProperty('attemptNumber')]
    public int $attemptNumber;

    /**
     * @var ?string $completedAt
     */
    #[JsonProperty('completedAt')]
    public ?string $completedAt;

    /**
     * @var (
     *    float
     *   |value-of<GetWebhookEventResponseAttemptsItemDurationMsOne>
     * )|null $durationMs
     */
    #[JsonProperty('durationMs'), Union('float', 'string', 'null')]
    public float|string|null $durationMs;

    /**
     * @var ?string $errorCode
     */
    #[JsonProperty('errorCode')]
    public ?string $errorCode;

    /**
     * @var ?string $errorMessage
     */
    #[JsonProperty('errorMessage')]
    public ?string $errorMessage;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $requestedAt
     */
    #[JsonProperty('requestedAt')]
    public string $requestedAt;

    /**
     * @var (
     *    float
     *   |value-of<GetWebhookEventResponseAttemptsItemResponseStatusOne>
     * )|null $responseStatus
     */
    #[JsonProperty('responseStatus'), Union('float', 'string', 'null')]
    public float|string|null $responseStatus;

    /**
     * @var value-of<GetWebhookEventResponseAttemptsItemTrigger> $trigger
     */
    #[JsonProperty('trigger')]
    public string $trigger;

    /**
     * @param array{
     *   deliveryId: string,
     *   endpointId: string,
     *   attemptNumber: int,
     *   id: string,
     *   requestedAt: string,
     *   trigger: value-of<GetWebhookEventResponseAttemptsItemTrigger>,
     *   completedAt?: ?string,
     *   durationMs?: (
     *    float
     *   |value-of<GetWebhookEventResponseAttemptsItemDurationMsOne>
     * )|null,
     *   errorCode?: ?string,
     *   errorMessage?: ?string,
     *   responseStatus?: (
     *    float
     *   |value-of<GetWebhookEventResponseAttemptsItemResponseStatusOne>
     * )|null,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->deliveryId = $values['deliveryId'];
        $this->endpointId = $values['endpointId'];
        $this->attemptNumber = $values['attemptNumber'];
        $this->completedAt = $values['completedAt'] ?? null;
        $this->durationMs = $values['durationMs'] ?? null;
        $this->errorCode = $values['errorCode'] ?? null;
        $this->errorMessage = $values['errorMessage'] ?? null;
        $this->id = $values['id'];
        $this->requestedAt = $values['requestedAt'];
        $this->responseStatus = $values['responseStatus'] ?? null;
        $this->trigger = $values['trigger'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
