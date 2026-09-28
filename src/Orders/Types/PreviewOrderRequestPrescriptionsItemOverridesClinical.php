<?php

namespace Affinity\Orders\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class PreviewOrderRequestPrescriptionsItemOverridesClinical extends JsonSerializableType
{
    /**
     * @var ?PreviewOrderRequestPrescriptionsItemOverridesClinicalCompoundingReason $compoundingReason
     */
    #[JsonProperty('compoundingReason')]
    public ?PreviewOrderRequestPrescriptionsItemOverridesClinicalCompoundingReason $compoundingReason;

    /**
     * @var ?value-of<PreviewOrderRequestPrescriptionsItemOverridesClinicalMedicationReviewStatus> $medicationReviewStatus
     */
    #[JsonProperty('medicationReviewStatus')]
    public ?string $medicationReviewStatus;

    /**
     * @var ?value-of<PreviewOrderRequestPrescriptionsItemOverridesClinicalDiagnosisReviewStatus> $diagnosisReviewStatus
     */
    #[JsonProperty('diagnosisReviewStatus')]
    public ?string $diagnosisReviewStatus;

    /**
     * @var ?array<string> $currentMedications
     */
    #[JsonProperty('currentMedications'), ArrayType(['string'])]
    public ?array $currentMedications;

    /**
     * @var ?array<PreviewOrderRequestPrescriptionsItemOverridesClinicalDiagnosesItem> $diagnoses
     */
    #[JsonProperty('diagnoses'), ArrayType([PreviewOrderRequestPrescriptionsItemOverridesClinicalDiagnosesItem::class])]
    public ?array $diagnoses;

    /**
     * @var ?array<PreviewOrderRequestPrescriptionsItemOverridesClinicalObservationsItem> $observations
     */
    #[JsonProperty('observations'), ArrayType([PreviewOrderRequestPrescriptionsItemOverridesClinicalObservationsItem::class])]
    public ?array $observations;

    /**
     * @param array{
     *   compoundingReason?: ?PreviewOrderRequestPrescriptionsItemOverridesClinicalCompoundingReason,
     *   medicationReviewStatus?: ?value-of<PreviewOrderRequestPrescriptionsItemOverridesClinicalMedicationReviewStatus>,
     *   diagnosisReviewStatus?: ?value-of<PreviewOrderRequestPrescriptionsItemOverridesClinicalDiagnosisReviewStatus>,
     *   currentMedications?: ?array<string>,
     *   diagnoses?: ?array<PreviewOrderRequestPrescriptionsItemOverridesClinicalDiagnosesItem>,
     *   observations?: ?array<PreviewOrderRequestPrescriptionsItemOverridesClinicalObservationsItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->compoundingReason = $values['compoundingReason'] ?? null;
        $this->medicationReviewStatus = $values['medicationReviewStatus'] ?? null;
        $this->diagnosisReviewStatus = $values['diagnosisReviewStatus'] ?? null;
        $this->currentMedications = $values['currentMedications'] ?? null;
        $this->diagnoses = $values['diagnoses'] ?? null;
        $this->observations = $values['observations'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
