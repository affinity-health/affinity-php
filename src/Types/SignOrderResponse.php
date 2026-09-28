<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class SignOrderResponse extends JsonSerializableType
{
    /**
     * @var string $orderId
     */
    #[JsonProperty('orderId')]
    public string $orderId;

    /**
     * @var array<string> $prescriptions
     */
    #[JsonProperty('prescriptions'), ArrayType(['string'])]
    public array $prescriptions;

    /**
     * @var string $signedAt
     */
    #[JsonProperty('signedAt')]
    public string $signedAt;

    /**
     * @var value-of<SignOrderResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @param array{
     *   orderId: string,
     *   prescriptions: array<string>,
     *   signedAt: string,
     *   status: value-of<SignOrderResponseStatus>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->orderId = $values['orderId'];
        $this->prescriptions = $values['prescriptions'];
        $this->signedAt = $values['signedAt'];
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
