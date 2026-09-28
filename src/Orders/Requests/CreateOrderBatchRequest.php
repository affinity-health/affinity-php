<?php

namespace Affinity\Orders\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Orders\Types\CreateOrderBatchRequestPrescriber;
use Affinity\Orders\Types\CreateOrderBatchRequestOrdersItem;
use Affinity\Core\Types\ArrayType;

class CreateOrderBatchRequest extends JsonSerializableType
{
    /**
     * @var string $idempotencyKey
     */
    public string $idempotencyKey;

    /**
     * @var ?string $affinityActorId Required for user actors and optional for system actors. Omit both actor headers to use the authenticated service account as a system actor.
     */
    public ?string $affinityActorId;

    /**
     * @var ?string $affinityActorType Use user when a person initiated the action and system for autonomous work. Omit both actor headers to default to system.
     */
    public ?string $affinityActorType;

    /**
     * @var string $practiceId
     */
    #[JsonProperty('practiceId')]
    public string $practiceId;

    /**
     * @var ?string $userId
     */
    #[JsonProperty('userId')]
    public ?string $userId;

    /**
     * @var ?CreateOrderBatchRequestPrescriber $prescriber
     */
    #[JsonProperty('prescriber')]
    public ?CreateOrderBatchRequestPrescriber $prescriber;

    /**
     * @var array<CreateOrderBatchRequestOrdersItem> $orders
     */
    #[JsonProperty('orders'), ArrayType([CreateOrderBatchRequestOrdersItem::class])]
    public array $orders;

    /**
     * @param array{
     *   idempotencyKey: string,
     *   practiceId: string,
     *   orders: array<CreateOrderBatchRequestOrdersItem>,
     *   affinityActorId?: ?string,
     *   affinityActorType?: ?string,
     *   userId?: ?string,
     *   prescriber?: ?CreateOrderBatchRequestPrescriber,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->idempotencyKey = $values['idempotencyKey'];
        $this->affinityActorId = $values['affinityActorId'] ?? null;
        $this->affinityActorType = $values['affinityActorType'] ?? null;
        $this->practiceId = $values['practiceId'];
        $this->userId = $values['userId'] ?? null;
        $this->prescriber = $values['prescriber'] ?? null;
        $this->orders = $values['orders'];
    }
}
