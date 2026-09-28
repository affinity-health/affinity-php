<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class CancelOrderResponseCancellation extends JsonSerializableType
{
    /**
     * @var value-of<CancelOrderResponseCancellationStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var array<CancelOrderResponseCancellationOutcomesItem> $outcomes
     */
    #[JsonProperty('outcomes'), ArrayType([CancelOrderResponseCancellationOutcomesItem::class])]
    public array $outcomes;

    /**
     * @param array{
     *   status: value-of<CancelOrderResponseCancellationStatus>,
     *   outcomes: array<CancelOrderResponseCancellationOutcomesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->status = $values['status'];
        $this->outcomes = $values['outcomes'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
