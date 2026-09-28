<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class PreviewOrderResponseOrderInputPrescriptionsItemClinical extends JsonSerializableType
{
    /**
     * @var ?PreviewOrderResponseOrderInputPrescriptionsItemClinicalCompoundingReason $compoundingReason
     */
    #[JsonProperty('compoundingReason')]
    public ?PreviewOrderResponseOrderInputPrescriptionsItemClinicalCompoundingReason $compoundingReason;

    /**
     * @var ?value-of<PreviewOrderResponseOrderInputPrescriptionsItemClinicalMedicationReviewStatus> $medicationReviewStatus
     */
    #[JsonProperty('medicationReviewStatus')]
    public ?string $medicationReviewStatus;

    /**
     * @var ?value-of<PreviewOrderResponseOrderInputPrescriptionsItemClinicalDiagnosisReviewStatus> $diagnosisReviewStatus
     */
    #[JsonProperty('diagnosisReviewStatus')]
    public ?string $diagnosisReviewStatus;

    /**
     * @var ?array<string> $currentMedications
     */
    #[JsonProperty('currentMedications'), ArrayType(['string'])]
    public ?array $currentMedications;

    /**
     * @var ?array<PreviewOrderResponseOrderInputPrescriptionsItemClinicalDiagnosesItem> $diagnoses
     */
    #[JsonProperty('diagnoses'), ArrayType([PreviewOrderResponseOrderInputPrescriptionsItemClinicalDiagnosesItem::class])]
    public ?array $diagnoses;

    /**
     * @var ?array<PreviewOrderResponseOrderInputPrescriptionsItemClinicalObservationsItem> $observations
     */
    #[JsonProperty('observations'), ArrayType([PreviewOrderResponseOrderInputPrescriptionsItemClinicalObservationsItem::class])]
    public ?array $observations;

    /**
     * @param array{
     *   compoundingReason?: ?PreviewOrderResponseOrderInputPrescriptionsItemClinicalCompoundingReason,
     *   medicationReviewStatus?: ?value-of<PreviewOrderResponseOrderInputPrescriptionsItemClinicalMedicationReviewStatus>,
     *   diagnosisReviewStatus?: ?value-of<PreviewOrderResponseOrderInputPrescriptionsItemClinicalDiagnosisReviewStatus>,
     *   currentMedications?: ?array<string>,
     *   diagnoses?: ?array<PreviewOrderResponseOrderInputPrescriptionsItemClinicalDiagnosesItem>,
     *   observations?: ?array<PreviewOrderResponseOrderInputPrescriptionsItemClinicalObservationsItem>,
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
