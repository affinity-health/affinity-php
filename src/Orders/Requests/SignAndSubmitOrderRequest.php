<?php

namespace Affinity\Orders\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Orders\Types\SignAndSubmitOrderRequestPrescriber;
use Affinity\Orders\Types\SignAndSubmitOrderRequestExpectedVersionsItem;
use Affinity\Core\Types\ArrayType;

class SignAndSubmitOrderRequest extends JsonSerializableType
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
     * @var ?SignAndSubmitOrderRequestPrescriber $prescriber
     */
    #[JsonProperty('prescriber')]
    public ?SignAndSubmitOrderRequestPrescriber $prescriber;

    /**
     * @var bool $signatureAttestation
     */
    #[JsonProperty('signatureAttestation')]
    public bool $signatureAttestation;

    /**
     * @var ?string $expectedRevision Opaque revision of the complete order prescription set. Send the revision you reviewed as expectedRevision; never replace it automatically after a conflict.
     */
    #[JsonProperty('expectedRevision')]
    public ?string $expectedRevision;

    /**
     * @var ?array<SignAndSubmitOrderRequestExpectedVersionsItem> $expectedVersions
     */
    #[JsonProperty('expectedVersions'), ArrayType([SignAndSubmitOrderRequestExpectedVersionsItem::class])]
    public ?array $expectedVersions;

    /**
     * @param array{
     *   idempotencyKey: string,
     *   practiceId: string,
     *   signatureAttestation: bool,
     *   userId?: ?string,
     *   prescriber?: ?SignAndSubmitOrderRequestPrescriber,
     *   expectedRevision?: ?string,
     *   expectedVersions?: ?array<SignAndSubmitOrderRequestExpectedVersionsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->idempotencyKey = $values['idempotencyKey'];
        $this->practiceId = $values['practiceId'];
        $this->userId = $values['userId'] ?? null;
        $this->prescriber = $values['prescriber'] ?? null;
        $this->signatureAttestation = $values['signatureAttestation'];
        $this->expectedRevision = $values['expectedRevision'] ?? null;
        $this->expectedVersions = $values['expectedVersions'] ?? null;
    }
}
