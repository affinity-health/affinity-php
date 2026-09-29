<?php

namespace Affinity\Patients\Allergies\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Patients\Allergies\Types\ReplacePatientAllergiesRequestAllergiesItem;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;
use Affinity\Patients\Allergies\Types\ReplacePatientAllergiesRequestReviewStatus;

class ReplacePatientAllergiesRequest extends JsonSerializableType
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
     * @var array<ReplacePatientAllergiesRequestAllergiesItem> $allergies
     */
    #[JsonProperty('allergies'), ArrayType([ReplacePatientAllergiesRequestAllergiesItem::class])]
    public array $allergies;

    /**
     * @var value-of<ReplacePatientAllergiesRequestReviewStatus> $reviewStatus
     */
    #[JsonProperty('reviewStatus')]
    public string $reviewStatus;

    /**
     * @param array{
     *   idempotencyKey: string,
     *   allergies: array<ReplacePatientAllergiesRequestAllergiesItem>,
     *   reviewStatus: value-of<ReplacePatientAllergiesRequestReviewStatus>,
     *   affinityActorId?: ?string,
     *   affinityActorType?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->idempotencyKey = $values['idempotencyKey'];
        $this->affinityActorId = $values['affinityActorId'] ?? null;
        $this->affinityActorType = $values['affinityActorType'] ?? null;
        $this->allergies = $values['allergies'];
        $this->reviewStatus = $values['reviewStatus'];
    }
}
