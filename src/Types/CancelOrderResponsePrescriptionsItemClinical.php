<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class CancelOrderResponsePrescriptionsItemClinical extends JsonSerializableType
{
    /**
     * @var ?array<CancelOrderResponsePrescriptionsItemClinicalAllergiesItem> $allergies
     */
    #[JsonProperty('allergies'), ArrayType([CancelOrderResponsePrescriptionsItemClinicalAllergiesItem::class])]
    public ?array $allergies;

    /**
     * @var ?value-of<CancelOrderResponsePrescriptionsItemClinicalMedicationReviewStatus> $medicationReviewStatus
     */
    #[JsonProperty('medicationReviewStatus')]
    public ?string $medicationReviewStatus;

    /**
     * @var ?value-of<CancelOrderResponsePrescriptionsItemClinicalDiagnosisReviewStatus> $diagnosisReviewStatus
     */
    #[JsonProperty('diagnosisReviewStatus')]
    public ?string $diagnosisReviewStatus;

    /**
     * @var ?array<CancelOrderResponsePrescriptionsItemClinicalConditionsItem> $conditions
     */
    #[JsonProperty('conditions'), ArrayType([CancelOrderResponsePrescriptionsItemClinicalConditionsItem::class])]
    public ?array $conditions;

    /**
     * @var ?CancelOrderResponsePrescriptionsItemClinicalCompoundingReason $compoundingReason
     */
    #[JsonProperty('compoundingReason')]
    public ?CancelOrderResponsePrescriptionsItemClinicalCompoundingReason $compoundingReason;

    /**
     * @var ?array<CancelOrderResponsePrescriptionsItemClinicalMedicationsItem> $medications
     */
    #[JsonProperty('medications'), ArrayType([CancelOrderResponsePrescriptionsItemClinicalMedicationsItem::class])]
    public ?array $medications;

    /**
     * @var ?array<CancelOrderResponsePrescriptionsItemClinicalObservationsItem> $observations
     */
    #[JsonProperty('observations'), ArrayType([CancelOrderResponsePrescriptionsItemClinicalObservationsItem::class])]
    public ?array $observations;

    /**
     * @param array{
     *   allergies?: ?array<CancelOrderResponsePrescriptionsItemClinicalAllergiesItem>,
     *   medicationReviewStatus?: ?value-of<CancelOrderResponsePrescriptionsItemClinicalMedicationReviewStatus>,
     *   diagnosisReviewStatus?: ?value-of<CancelOrderResponsePrescriptionsItemClinicalDiagnosisReviewStatus>,
     *   conditions?: ?array<CancelOrderResponsePrescriptionsItemClinicalConditionsItem>,
     *   compoundingReason?: ?CancelOrderResponsePrescriptionsItemClinicalCompoundingReason,
     *   medications?: ?array<CancelOrderResponsePrescriptionsItemClinicalMedicationsItem>,
     *   observations?: ?array<CancelOrderResponsePrescriptionsItemClinicalObservationsItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->allergies = $values['allergies'] ?? null;
        $this->medicationReviewStatus = $values['medicationReviewStatus'] ?? null;
        $this->diagnosisReviewStatus = $values['diagnosisReviewStatus'] ?? null;
        $this->conditions = $values['conditions'] ?? null;
        $this->compoundingReason = $values['compoundingReason'] ?? null;
        $this->medications = $values['medications'] ?? null;
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
