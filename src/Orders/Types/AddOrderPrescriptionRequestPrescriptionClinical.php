<?php

namespace Affinity\Orders\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class AddOrderPrescriptionRequestPrescriptionClinical extends JsonSerializableType
{
    /**
     * @var ?AddOrderPrescriptionRequestPrescriptionClinicalCompoundingReason $compoundingReason
     */
    #[JsonProperty('compoundingReason')]
    public ?AddOrderPrescriptionRequestPrescriptionClinicalCompoundingReason $compoundingReason;

    /**
     * @var ?value-of<AddOrderPrescriptionRequestPrescriptionClinicalMedicationReviewStatus> $medicationReviewStatus
     */
    #[JsonProperty('medicationReviewStatus')]
    public ?string $medicationReviewStatus;

    /**
     * @var ?value-of<AddOrderPrescriptionRequestPrescriptionClinicalDiagnosisReviewStatus> $diagnosisReviewStatus
     */
    #[JsonProperty('diagnosisReviewStatus')]
    public ?string $diagnosisReviewStatus;

    /**
     * @var ?array<string> $currentMedications
     */
    #[JsonProperty('currentMedications'), ArrayType(['string'])]
    public ?array $currentMedications;

    /**
     * @var ?array<AddOrderPrescriptionRequestPrescriptionClinicalDiagnosesItem> $diagnoses
     */
    #[JsonProperty('diagnoses'), ArrayType([AddOrderPrescriptionRequestPrescriptionClinicalDiagnosesItem::class])]
    public ?array $diagnoses;

    /**
     * @var ?array<AddOrderPrescriptionRequestPrescriptionClinicalObservationsItem> $observations
     */
    #[JsonProperty('observations'), ArrayType([AddOrderPrescriptionRequestPrescriptionClinicalObservationsItem::class])]
    public ?array $observations;

    /**
     * @param array{
     *   compoundingReason?: ?AddOrderPrescriptionRequestPrescriptionClinicalCompoundingReason,
     *   medicationReviewStatus?: ?value-of<AddOrderPrescriptionRequestPrescriptionClinicalMedicationReviewStatus>,
     *   diagnosisReviewStatus?: ?value-of<AddOrderPrescriptionRequestPrescriptionClinicalDiagnosisReviewStatus>,
     *   currentMedications?: ?array<string>,
     *   diagnoses?: ?array<AddOrderPrescriptionRequestPrescriptionClinicalDiagnosesItem>,
     *   observations?: ?array<AddOrderPrescriptionRequestPrescriptionClinicalObservationsItem>,
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
