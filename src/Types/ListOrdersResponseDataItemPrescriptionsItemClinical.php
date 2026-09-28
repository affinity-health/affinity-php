<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class ListOrdersResponseDataItemPrescriptionsItemClinical extends JsonSerializableType
{
    /**
     * @var ?array<ListOrdersResponseDataItemPrescriptionsItemClinicalAllergiesItem> $allergies
     */
    #[JsonProperty('allergies'), ArrayType([ListOrdersResponseDataItemPrescriptionsItemClinicalAllergiesItem::class])]
    public ?array $allergies;

    /**
     * @var ?value-of<ListOrdersResponseDataItemPrescriptionsItemClinicalMedicationReviewStatus> $medicationReviewStatus
     */
    #[JsonProperty('medicationReviewStatus')]
    public ?string $medicationReviewStatus;

    /**
     * @var ?value-of<ListOrdersResponseDataItemPrescriptionsItemClinicalDiagnosisReviewStatus> $diagnosisReviewStatus
     */
    #[JsonProperty('diagnosisReviewStatus')]
    public ?string $diagnosisReviewStatus;

    /**
     * @var ?array<ListOrdersResponseDataItemPrescriptionsItemClinicalConditionsItem> $conditions
     */
    #[JsonProperty('conditions'), ArrayType([ListOrdersResponseDataItemPrescriptionsItemClinicalConditionsItem::class])]
    public ?array $conditions;

    /**
     * @var ?ListOrdersResponseDataItemPrescriptionsItemClinicalCompoundingReason $compoundingReason
     */
    #[JsonProperty('compoundingReason')]
    public ?ListOrdersResponseDataItemPrescriptionsItemClinicalCompoundingReason $compoundingReason;

    /**
     * @var ?array<ListOrdersResponseDataItemPrescriptionsItemClinicalMedicationsItem> $medications
     */
    #[JsonProperty('medications'), ArrayType([ListOrdersResponseDataItemPrescriptionsItemClinicalMedicationsItem::class])]
    public ?array $medications;

    /**
     * @var ?array<ListOrdersResponseDataItemPrescriptionsItemClinicalObservationsItem> $observations
     */
    #[JsonProperty('observations'), ArrayType([ListOrdersResponseDataItemPrescriptionsItemClinicalObservationsItem::class])]
    public ?array $observations;

    /**
     * @param array{
     *   allergies?: ?array<ListOrdersResponseDataItemPrescriptionsItemClinicalAllergiesItem>,
     *   medicationReviewStatus?: ?value-of<ListOrdersResponseDataItemPrescriptionsItemClinicalMedicationReviewStatus>,
     *   diagnosisReviewStatus?: ?value-of<ListOrdersResponseDataItemPrescriptionsItemClinicalDiagnosisReviewStatus>,
     *   conditions?: ?array<ListOrdersResponseDataItemPrescriptionsItemClinicalConditionsItem>,
     *   compoundingReason?: ?ListOrdersResponseDataItemPrescriptionsItemClinicalCompoundingReason,
     *   medications?: ?array<ListOrdersResponseDataItemPrescriptionsItemClinicalMedicationsItem>,
     *   observations?: ?array<ListOrdersResponseDataItemPrescriptionsItemClinicalObservationsItem>,
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
