<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class ListOrdersResponseDataItemFulfillmentsItemCancellationsItem extends JsonSerializableType
{
    /**
     * @var int $attempts
     */
    #[JsonProperty('attempts')]
    public int $attempts;

    /**
     * @var ?string $confirmedAt
     */
    #[JsonProperty('confirmedAt')]
    public ?string $confirmedAt;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var ?string $errorCode
     */
    #[JsonProperty('errorCode')]
    public ?string $errorCode;

    /**
     * @var ?string $errorMessage
     */
    #[JsonProperty('errorMessage')]
    public ?string $errorMessage;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $providerStatus
     */
    #[JsonProperty('providerStatus')]
    public ?string $providerStatus;

    /**
     * @var string $reason
     */
    #[JsonProperty('reason')]
    public string $reason;

    /**
     * @var string $requestedAt
     */
    #[JsonProperty('requestedAt')]
    public string $requestedAt;

    /**
     * @var ListOrdersResponseDataItemFulfillmentsItemCancellationsItemRequestedBy $requestedBy
     */
    #[JsonProperty('requestedBy')]
    public ListOrdersResponseDataItemFulfillmentsItemCancellationsItemRequestedBy $requestedBy;

    /**
     * @var ?string $resolvedAt
     */
    #[JsonProperty('resolvedAt')]
    public ?string $resolvedAt;

    /**
     * @var ?string $sentAt
     */
    #[JsonProperty('sentAt')]
    public ?string $sentAt;

    /**
     * @var value-of<ListOrdersResponseDataItemFulfillmentsItemCancellationsItemSource> $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @var value-of<ListOrdersResponseDataItemFulfillmentsItemCancellationsItemStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var string $updatedAt
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @param array{
     *   attempts: int,
     *   createdAt: string,
     *   id: string,
     *   reason: string,
     *   requestedAt: string,
     *   requestedBy: ListOrdersResponseDataItemFulfillmentsItemCancellationsItemRequestedBy,
     *   source: value-of<ListOrdersResponseDataItemFulfillmentsItemCancellationsItemSource>,
     *   status: value-of<ListOrdersResponseDataItemFulfillmentsItemCancellationsItemStatus>,
     *   updatedAt: string,
     *   confirmedAt?: ?string,
     *   errorCode?: ?string,
     *   errorMessage?: ?string,
     *   providerStatus?: ?string,
     *   resolvedAt?: ?string,
     *   sentAt?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->attempts = $values['attempts'];
        $this->confirmedAt = $values['confirmedAt'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->errorCode = $values['errorCode'] ?? null;
        $this->errorMessage = $values['errorMessage'] ?? null;
        $this->id = $values['id'];
        $this->providerStatus = $values['providerStatus'] ?? null;
        $this->reason = $values['reason'];
        $this->requestedAt = $values['requestedAt'];
        $this->requestedBy = $values['requestedBy'];
        $this->resolvedAt = $values['resolvedAt'] ?? null;
        $this->sentAt = $values['sentAt'] ?? null;
        $this->source = $values['source'];
        $this->status = $values['status'];
        $this->updatedAt = $values['updatedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
