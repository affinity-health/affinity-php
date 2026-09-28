<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\Union;

class ReplayWebhookEventResponseDeliveriesItem extends JsonSerializableType
{
    /**
     * @var (
     *    float
     *   |value-of<ReplayWebhookEventResponseDeliveriesItemAutomaticAttemptCountOne>
     * ) $automaticAttemptCount
     */
    #[JsonProperty('automaticAttemptCount'), Union('float', 'string')]
    public float|string $automaticAttemptCount;

    /**
     * @var string $endpointId
     */
    #[JsonProperty('endpointId')]
    public string $endpointId;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $lastErrorCode
     */
    #[JsonProperty('lastErrorCode')]
    public ?string $lastErrorCode;

    /**
     * @var ?string $lastErrorMessage
     */
    #[JsonProperty('lastErrorMessage')]
    public ?string $lastErrorMessage;

    /**
     * @var ?string $nextAttemptAt
     */
    #[JsonProperty('nextAttemptAt')]
    public ?string $nextAttemptAt;

    /**
     * @var value-of<ReplayWebhookEventResponseDeliveriesItemStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @param array{
     *   automaticAttemptCount: (
     *    float
     *   |value-of<ReplayWebhookEventResponseDeliveriesItemAutomaticAttemptCountOne>
     * ),
     *   endpointId: string,
     *   id: string,
     *   status: value-of<ReplayWebhookEventResponseDeliveriesItemStatus>,
     *   lastErrorCode?: ?string,
     *   lastErrorMessage?: ?string,
     *   nextAttemptAt?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->automaticAttemptCount = $values['automaticAttemptCount'];
        $this->endpointId = $values['endpointId'];
        $this->id = $values['id'];
        $this->lastErrorCode = $values['lastErrorCode'] ?? null;
        $this->lastErrorMessage = $values['lastErrorMessage'] ?? null;
        $this->nextAttemptAt = $values['nextAttemptAt'] ?? null;
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
