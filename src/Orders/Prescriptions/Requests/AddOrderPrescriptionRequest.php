<?php

namespace Affinity\Orders\Prescriptions\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;
use Affinity\Core\Types\Union;
use Affinity\Orders\Prescriptions\Types\AddOrderPrescriptionRequestExpectedVersionsItem;
use Affinity\Orders\Prescriptions\Types\AddOrderPrescriptionRequestPrescription;

class AddOrderPrescriptionRequest extends JsonSerializableType
{
    /**
     * @var string $idempotencyKey
     */
    public string $idempotencyKey;

    /**
     * @var ?string $affinityActorId Required for user actors and optional for system actors. Omit both actor headers to use the authenticated service account as a system actor.
     */
    public ?string $affinityActorId;

    /**
     * @var ?string $affinityActorType Use user when a person initiated the action and system for autonomous work. Omit both actor headers to default to system.
     */
    public ?string $affinityActorType;

    /**
     * @var ?array<string, (
     *    string
     *   |float
     *   |bool
     * )|null> $metadata
     */
    #[JsonProperty('metadata'), ArrayType(['string' => new Union(new Union('string', 'float', 'bool'), 'null')])]
    public ?array $metadata;

    /**
     * @var string $practiceId
     */
    #[JsonProperty('practiceId')]
    public string $practiceId;

    /**
     * @var ?string $expectedRevision Opaque revision of the complete order prescription set. Send the revision you reviewed as expectedRevision; never replace it automatically after a conflict.
     */
    #[JsonProperty('expectedRevision')]
    public ?string $expectedRevision;

    /**
     * @var ?array<AddOrderPrescriptionRequestExpectedVersionsItem> $expectedVersions
     */
    #[JsonProperty('expectedVersions'), ArrayType([AddOrderPrescriptionRequestExpectedVersionsItem::class])]
    public ?array $expectedVersions;

    /**
     * @var AddOrderPrescriptionRequestPrescription $prescription
     */
    #[JsonProperty('prescription')]
    public AddOrderPrescriptionRequestPrescription $prescription;

    /**
     * @param array{
     *   idempotencyKey: string,
     *   practiceId: string,
     *   prescription: AddOrderPrescriptionRequestPrescription,
     *   affinityActorId?: ?string,
     *   affinityActorType?: ?string,
     *   metadata?: ?array<string, (
     *    string
     *   |float
     *   |bool
     * )|null>,
     *   expectedRevision?: ?string,
     *   expectedVersions?: ?array<AddOrderPrescriptionRequestExpectedVersionsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->idempotencyKey = $values['idempotencyKey'];
        $this->affinityActorId = $values['affinityActorId'] ?? null;
        $this->affinityActorType = $values['affinityActorType'] ?? null;
        $this->metadata = $values['metadata'] ?? null;
        $this->practiceId = $values['practiceId'];
        $this->expectedRevision = $values['expectedRevision'] ?? null;
        $this->expectedVersions = $values['expectedVersions'] ?? null;
        $this->prescription = $values['prescription'];
    }
}
