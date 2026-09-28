<?php

namespace Affinity\Orders\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class CreateOrderRequestPrescriptionsItemClinical extends JsonSerializableType
{
    /**
     * @var ?CreateOrderRequestPrescriptionsItemClinicalCompoundingReason $compoundingReason
     */
    #[JsonProperty('compoundingReason')]
    public ?CreateOrderRequestPrescriptionsItemClinicalCompoundingReason $compoundingReason;

    /**
     * @var ?value-of<CreateOrderRequestPrescriptionsItemClinicalMedicationReviewStatus> $medicationReviewStatus
     */
    #[JsonProperty('medicationReviewStatus')]
    public ?string $medicationReviewStatus;

    /**
     * @var ?value-of<CreateOrderRequestPrescriptionsItemClinicalDiagnosisReviewStatus> $diagnosisReviewStatus
     */
    #[JsonProperty('diagnosisReviewStatus')]
    public ?string $diagnosisReviewStatus;

    /**
     * @var ?array<string> $currentMedications
     */
    #[JsonProperty('currentMedications'), ArrayType(['string'])]
    public ?array $currentMedications;

    /**
     * @var ?array<CreateOrderRequestPrescriptionsItemClinicalDiagnosesItem> $diagnoses
     */
    #[JsonProperty('diagnoses'), ArrayType([CreateOrderRequestPrescriptionsItemClinicalDiagnosesItem::class])]
    public ?array $diagnoses;

    /**
     * @var ?array<CreateOrderRequestPrescriptionsItemClinicalObservationsItem> $observations
     */
    #[JsonProperty('observations'), ArrayType([CreateOrderRequestPrescriptionsItemClinicalObservationsItem::class])]
    public ?array $observations;

    /**
     * @param array{
     *   compoundingReason?: ?CreateOrderRequestPrescriptionsItemClinicalCompoundingReason,
     *   medicationReviewStatus?: ?value-of<CreateOrderRequestPrescriptionsItemClinicalMedicationReviewStatus>,
     *   diagnosisReviewStatus?: ?value-of<CreateOrderRequestPrescriptionsItemClinicalDiagnosisReviewStatus>,
     *   currentMedications?: ?array<string>,
     *   diagnoses?: ?array<CreateOrderRequestPrescriptionsItemClinicalDiagnosesItem>,
     *   observations?: ?array<CreateOrderRequestPrescriptionsItemClinicalObservationsItem>,
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
