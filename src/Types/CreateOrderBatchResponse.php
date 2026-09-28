<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class CreateOrderBatchResponse extends JsonSerializableType
{
    /**
     * @var value-of<CreateOrderBatchResponseObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

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
     * @var bool $livemode
     */
    #[JsonProperty('livemode')]
    public bool $livemode;

    /**
     * @var array<CreateOrderBatchResponseOrdersItem> $orders
     */
    #[JsonProperty('orders'), ArrayType([CreateOrderBatchResponseOrdersItem::class])]
    public array $orders;

    /**
     * @param array{
     *   object: value-of<CreateOrderBatchResponseObject>,
     *   practiceId: string,
     *   livemode: bool,
     *   orders: array<CreateOrderBatchResponseOrdersItem>,
     *   userId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->object = $values['object'];
        $this->practiceId = $values['practiceId'];
        $this->userId = $values['userId'] ?? null;
        $this->livemode = $values['livemode'];
        $this->orders = $values['orders'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
