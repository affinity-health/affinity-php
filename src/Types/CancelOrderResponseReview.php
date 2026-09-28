<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class CancelOrderResponseReview extends JsonSerializableType
{
    /**
     * @var value-of<CancelOrderResponseReviewStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $reason
     */
    #[JsonProperty('reason')]
    public ?string $reason;

    /**
     * @var string $requestedAt
     */
    #[JsonProperty('requestedAt')]
    public string $requestedAt;

    /**
     * @var ?string $completedAt
     */
    #[JsonProperty('completedAt')]
    public ?string $completedAt;

    /**
     * @var ?string $canceledAt
     */
    #[JsonProperty('canceledAt')]
    public ?string $canceledAt;

    /**
     * @var ?string $resolvedAt
     */
    #[JsonProperty('resolvedAt')]
    public ?string $resolvedAt;

    /**
     * @var ?CancelOrderResponseReviewResolvedBy $resolvedBy
     */
    #[JsonProperty('resolvedBy')]
    public ?CancelOrderResponseReviewResolvedBy $resolvedBy;

    /**
     * @var ?string $providerId
     */
    #[JsonProperty('providerId')]
    public ?string $providerId;

    /**
     * @param array{
     *   status: value-of<CancelOrderResponseReviewStatus>,
     *   requestedAt: string,
     *   reason?: ?string,
     *   completedAt?: ?string,
     *   canceledAt?: ?string,
     *   resolvedAt?: ?string,
     *   resolvedBy?: ?CancelOrderResponseReviewResolvedBy,
     *   providerId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->status = $values['status'];
        $this->reason = $values['reason'] ?? null;
        $this->requestedAt = $values['requestedAt'];
        $this->completedAt = $values['completedAt'] ?? null;
        $this->canceledAt = $values['canceledAt'] ?? null;
        $this->resolvedAt = $values['resolvedAt'] ?? null;
        $this->resolvedBy = $values['resolvedBy'] ?? null;
        $this->providerId = $values['providerId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
