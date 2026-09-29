<?php

namespace Affinity\Orders\Prescriptions\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class UpdateOrderPrescriptionRequestPrescriptionClinical extends JsonSerializableType
{
    /**
     * @var ?UpdateOrderPrescriptionRequestPrescriptionClinicalCompoundingReason $compoundingReason
     */
    #[JsonProperty('compoundingReason')]
    public ?UpdateOrderPrescriptionRequestPrescriptionClinicalCompoundingReason $compoundingReason;

    /**
     * @var ?value-of<UpdateOrderPrescriptionRequestPrescriptionClinicalMedicationReviewStatus> $medicationReviewStatus
     */
    #[JsonProperty('medicationReviewStatus')]
    public ?string $medicationReviewStatus;

    /**
     * @var ?value-of<UpdateOrderPrescriptionRequestPrescriptionClinicalDiagnosisReviewStatus> $diagnosisReviewStatus
     */
    #[JsonProperty('diagnosisReviewStatus')]
    public ?string $diagnosisReviewStatus;

    /**
     * @var ?array<string> $currentMedications
     */
    #[JsonProperty('currentMedications'), ArrayType(['string'])]
    public ?array $currentMedications;

    /**
     * @var ?array<UpdateOrderPrescriptionRequestPrescriptionClinicalDiagnosesItem> $diagnoses
     */
    #[JsonProperty('diagnoses'), ArrayType([UpdateOrderPrescriptionRequestPrescriptionClinicalDiagnosesItem::class])]
    public ?array $diagnoses;

    /**
     * @var ?array<UpdateOrderPrescriptionRequestPrescriptionClinicalObservationsItem> $observations
     */
    #[JsonProperty('observations'), ArrayType([UpdateOrderPrescriptionRequestPrescriptionClinicalObservationsItem::class])]
    public ?array $observations;

    /**
     * @param array{
     *   compoundingReason?: ?UpdateOrderPrescriptionRequestPrescriptionClinicalCompoundingReason,
     *   medicationReviewStatus?: ?value-of<UpdateOrderPrescriptionRequestPrescriptionClinicalMedicationReviewStatus>,
     *   diagnosisReviewStatus?: ?value-of<UpdateOrderPrescriptionRequestPrescriptionClinicalDiagnosisReviewStatus>,
     *   currentMedications?: ?array<string>,
     *   diagnoses?: ?array<UpdateOrderPrescriptionRequestPrescriptionClinicalDiagnosesItem>,
     *   observations?: ?array<UpdateOrderPrescriptionRequestPrescriptionClinicalObservationsItem>,
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
