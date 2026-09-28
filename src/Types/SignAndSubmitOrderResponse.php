<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class SignAndSubmitOrderResponse extends JsonSerializableType
{
    /**
     * @var value-of<SignAndSubmitOrderResponseObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var string $orderId
     */
    #[JsonProperty('orderId')]
    public string $orderId;

    /**
     * @var string $signedAt
     */
    #[JsonProperty('signedAt')]
    public string $signedAt;

    /**
     * @var value-of<SignAndSubmitOrderResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var array<SignAndSubmitOrderResponsePrescriptionsItem> $prescriptions
     */
    #[JsonProperty('prescriptions'), ArrayType([SignAndSubmitOrderResponsePrescriptionsItem::class])]
    public array $prescriptions;

    /**
     * @param array{
     *   object: value-of<SignAndSubmitOrderResponseObject>,
     *   orderId: string,
     *   signedAt: string,
     *   status: value-of<SignAndSubmitOrderResponseStatus>,
     *   prescriptions: array<SignAndSubmitOrderResponsePrescriptionsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->object = $values['object'];
        $this->orderId = $values['orderId'];
        $this->signedAt = $values['signedAt'];
        $this->status = $values['status'];
        $this->prescriptions = $values['prescriptions'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
