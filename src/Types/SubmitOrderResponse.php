<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class SubmitOrderResponse extends JsonSerializableType
{
    /**
     * @var value-of<SubmitOrderResponseObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var string $orderId
     */
    #[JsonProperty('orderId')]
    public string $orderId;

    /**
     * @var value-of<SubmitOrderResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @param array{
     *   object: value-of<SubmitOrderResponseObject>,
     *   orderId: string,
     *   status: value-of<SubmitOrderResponseStatus>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->object = $values['object'];
        $this->orderId = $values['orderId'];
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
