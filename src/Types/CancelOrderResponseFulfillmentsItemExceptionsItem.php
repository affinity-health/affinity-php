<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class CancelOrderResponseFulfillmentsItemExceptionsItem extends JsonSerializableType
{
    /**
     * @var bool $actionable
     */
    #[JsonProperty('actionable')]
    public bool $actionable;

    /**
     * @var ?CancelOrderResponseFulfillmentsItemExceptionsItemAssignedTo $assignedTo
     */
    #[JsonProperty('assignedTo')]
    public ?CancelOrderResponseFulfillmentsItemExceptionsItemAssignedTo $assignedTo;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var ?string $dueAt
     */
    #[JsonProperty('dueAt')]
    public ?string $dueAt;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $kind
     */
    #[JsonProperty('kind')]
    public string $kind;

    /**
     * @var ?string $resolution
     */
    #[JsonProperty('resolution')]
    public ?string $resolution;

    /**
     * @var ?string $resolvedAt
     */
    #[JsonProperty('resolvedAt')]
    public ?string $resolvedAt;

    /**
     * @var bool $retryable
     */
    #[JsonProperty('retryable')]
    public bool $retryable;

    /**
     * @var value-of<CancelOrderResponseFulfillmentsItemExceptionsItemSeverity> $severity
     */
    #[JsonProperty('severity')]
    public string $severity;

    /**
     * @var value-of<CancelOrderResponseFulfillmentsItemExceptionsItemStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var string $summary
     */
    #[JsonProperty('summary')]
    public string $summary;

    /**
     * @var string $updatedAt
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @param array{
     *   actionable: bool,
     *   createdAt: string,
     *   id: string,
     *   kind: string,
     *   retryable: bool,
     *   severity: value-of<CancelOrderResponseFulfillmentsItemExceptionsItemSeverity>,
     *   status: value-of<CancelOrderResponseFulfillmentsItemExceptionsItemStatus>,
     *   summary: string,
     *   updatedAt: string,
     *   assignedTo?: ?CancelOrderResponseFulfillmentsItemExceptionsItemAssignedTo,
     *   dueAt?: ?string,
     *   resolution?: ?string,
     *   resolvedAt?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->actionable = $values['actionable'];
        $this->assignedTo = $values['assignedTo'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->dueAt = $values['dueAt'] ?? null;
        $this->id = $values['id'];
        $this->kind = $values['kind'];
        $this->resolution = $values['resolution'] ?? null;
        $this->resolvedAt = $values['resolvedAt'] ?? null;
        $this->retryable = $values['retryable'];
        $this->severity = $values['severity'];
        $this->status = $values['status'];
        $this->summary = $values['summary'];
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
