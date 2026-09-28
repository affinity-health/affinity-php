<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class GetOrderResponsePrescriptionsItemClinical extends JsonSerializableType
{
    /**
     * @var ?array<GetOrderResponsePrescriptionsItemClinicalAllergiesItem> $allergies
     */
    #[JsonProperty('allergies'), ArrayType([GetOrderResponsePrescriptionsItemClinicalAllergiesItem::class])]
    public ?array $allergies;

    /**
     * @var ?value-of<GetOrderResponsePrescriptionsItemClinicalMedicationReviewStatus> $medicationReviewStatus
     */
    #[JsonProperty('medicationReviewStatus')]
    public ?string $medicationReviewStatus;

    /**
     * @var ?value-of<GetOrderResponsePrescriptionsItemClinicalDiagnosisReviewStatus> $diagnosisReviewStatus
     */
    #[JsonProperty('diagnosisReviewStatus')]
    public ?string $diagnosisReviewStatus;

    /**
     * @var ?array<GetOrderResponsePrescriptionsItemClinicalConditionsItem> $conditions
     */
    #[JsonProperty('conditions'), ArrayType([GetOrderResponsePrescriptionsItemClinicalConditionsItem::class])]
    public ?array $conditions;

    /**
     * @var ?GetOrderResponsePrescriptionsItemClinicalCompoundingReason $compoundingReason
     */
    #[JsonProperty('compoundingReason')]
    public ?GetOrderResponsePrescriptionsItemClinicalCompoundingReason $compoundingReason;

    /**
     * @var ?array<GetOrderResponsePrescriptionsItemClinicalMedicationsItem> $medications
     */
    #[JsonProperty('medications'), ArrayType([GetOrderResponsePrescriptionsItemClinicalMedicationsItem::class])]
    public ?array $medications;

    /**
     * @var ?array<GetOrderResponsePrescriptionsItemClinicalObservationsItem> $observations
     */
    #[JsonProperty('observations'), ArrayType([GetOrderResponsePrescriptionsItemClinicalObservationsItem::class])]
    public ?array $observations;

    /**
     * @param array{
     *   allergies?: ?array<GetOrderResponsePrescriptionsItemClinicalAllergiesItem>,
     *   medicationReviewStatus?: ?value-of<GetOrderResponsePrescriptionsItemClinicalMedicationReviewStatus>,
     *   diagnosisReviewStatus?: ?value-of<GetOrderResponsePrescriptionsItemClinicalDiagnosisReviewStatus>,
     *   conditions?: ?array<GetOrderResponsePrescriptionsItemClinicalConditionsItem>,
     *   compoundingReason?: ?GetOrderResponsePrescriptionsItemClinicalCompoundingReason,
     *   medications?: ?array<GetOrderResponsePrescriptionsItemClinicalMedicationsItem>,
     *   observations?: ?array<GetOrderResponsePrescriptionsItemClinicalObservationsItem>,
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
