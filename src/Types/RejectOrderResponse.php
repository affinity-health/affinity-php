<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class RejectOrderResponse extends JsonSerializableType
{
    /**
     * @var string $orderId
     */
    #[JsonProperty('orderId')]
    public string $orderId;

    /**
     * @var string $rejectedAt
     */
    #[JsonProperty('rejectedAt')]
    public string $rejectedAt;

    /**
     * @var string $reason
     */
    #[JsonProperty('reason')]
    public string $reason;

    /**
     * @var value-of<RejectOrderResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @param array{
     *   orderId: string,
     *   rejectedAt: string,
     *   reason: string,
     *   status: value-of<RejectOrderResponseStatus>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->orderId = $values['orderId'];
        $this->rejectedAt = $values['rejectedAt'];
        $this->reason = $values['reason'];
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
