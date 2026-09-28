<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class CancelOrderResponseCancellationOutcomesItem extends JsonSerializableType
{
    /**
     * @var string $cancellationId
     */
    #[JsonProperty('cancellationId')]
    public string $cancellationId;

    /**
     * @var string $fulfillmentId
     */
    #[JsonProperty('fulfillmentId')]
    public string $fulfillmentId;

    /**
     * @var value-of<CancelOrderResponseCancellationOutcomesItemStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @param array{
     *   cancellationId: string,
     *   fulfillmentId: string,
     *   status: value-of<CancelOrderResponseCancellationOutcomesItemStatus>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->cancellationId = $values['cancellationId'];
        $this->fulfillmentId = $values['fulfillmentId'];
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
