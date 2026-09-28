<?php

namespace Affinity\Orders\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class CreateOrderBatchRequestOrdersItemPrescriptionsItemClinical extends JsonSerializableType
{
    /**
     * @var ?CreateOrderBatchRequestOrdersItemPrescriptionsItemClinicalCompoundingReason $compoundingReason
     */
    #[JsonProperty('compoundingReason')]
    public ?CreateOrderBatchRequestOrdersItemPrescriptionsItemClinicalCompoundingReason $compoundingReason;

    /**
     * @var ?value-of<CreateOrderBatchRequestOrdersItemPrescriptionsItemClinicalMedicationReviewStatus> $medicationReviewStatus
     */
    #[JsonProperty('medicationReviewStatus')]
    public ?string $medicationReviewStatus;

    /**
     * @var ?value-of<CreateOrderBatchRequestOrdersItemPrescriptionsItemClinicalDiagnosisReviewStatus> $diagnosisReviewStatus
     */
    #[JsonProperty('diagnosisReviewStatus')]
    public ?string $diagnosisReviewStatus;

    /**
     * @var ?array<string> $currentMedications
     */
    #[JsonProperty('currentMedications'), ArrayType(['string'])]
    public ?array $currentMedications;

    /**
     * @var ?array<CreateOrderBatchRequestOrdersItemPrescriptionsItemClinicalDiagnosesItem> $diagnoses
     */
    #[JsonProperty('diagnoses'), ArrayType([CreateOrderBatchRequestOrdersItemPrescriptionsItemClinicalDiagnosesItem::class])]
    public ?array $diagnoses;

    /**
     * @var ?array<CreateOrderBatchRequestOrdersItemPrescriptionsItemClinicalObservationsItem> $observations
     */
    #[JsonProperty('observations'), ArrayType([CreateOrderBatchRequestOrdersItemPrescriptionsItemClinicalObservationsItem::class])]
    public ?array $observations;

    /**
     * @param array{
     *   compoundingReason?: ?CreateOrderBatchRequestOrdersItemPrescriptionsItemClinicalCompoundingReason,
     *   medicationReviewStatus?: ?value-of<CreateOrderBatchRequestOrdersItemPrescriptionsItemClinicalMedicationReviewStatus>,
     *   diagnosisReviewStatus?: ?value-of<CreateOrderBatchRequestOrdersItemPrescriptionsItemClinicalDiagnosisReviewStatus>,
     *   currentMedications?: ?array<string>,
     *   diagnoses?: ?array<CreateOrderBatchRequestOrdersItemPrescriptionsItemClinicalDiagnosesItem>,
     *   observations?: ?array<CreateOrderBatchRequestOrdersItemPrescriptionsItemClinicalObservationsItem>,
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
