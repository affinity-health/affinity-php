<?php

namespace Affinity\Orders\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Orders\Types\RejectOrderRequestPrescriber;
use Affinity\Orders\Types\RejectOrderRequestExpectedVersionsItem;
use Affinity\Core\Types\ArrayType;

class RejectOrderRequest extends JsonSerializableType
{
    /**
     * @var string $idempotencyKey
     */
    public string $idempotencyKey;

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
     * @var ?RejectOrderRequestPrescriber $prescriber
     */
    #[JsonProperty('prescriber')]
    public ?RejectOrderRequestPrescriber $prescriber;

    /**
     * @var string $reason
     */
    #[JsonProperty('reason')]
    public string $reason;

    /**
     * @var ?string $expectedRevision Opaque revision of the complete order prescription set. Send the revision you reviewed as expectedRevision; never replace it automatically after a conflict.
     */
    #[JsonProperty('expectedRevision')]
    public ?string $expectedRevision;

    /**
     * @var ?array<RejectOrderRequestExpectedVersionsItem> $expectedVersions
     */
    #[JsonProperty('expectedVersions'), ArrayType([RejectOrderRequestExpectedVersionsItem::class])]
    public ?array $expectedVersions;

    /**
     * @param array{
     *   idempotencyKey: string,
     *   practiceId: string,
     *   reason: string,
     *   userId?: ?string,
     *   prescriber?: ?RejectOrderRequestPrescriber,
     *   expectedRevision?: ?string,
     *   expectedVersions?: ?array<RejectOrderRequestExpectedVersionsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->idempotencyKey = $values['idempotencyKey'];
        $this->practiceId = $values['practiceId'];
        $this->userId = $values['userId'] ?? null;
        $this->prescriber = $values['prescriber'] ?? null;
        $this->reason = $values['reason'];
        $this->expectedRevision = $values['expectedRevision'] ?? null;
        $this->expectedVersions = $values['expectedVersions'] ?? null;
    }
}
