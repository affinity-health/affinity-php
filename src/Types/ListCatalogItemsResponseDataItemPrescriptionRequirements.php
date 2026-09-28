<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;
use Affinity\Core\Types\Union;

class ListCatalogItemsResponseDataItemPrescriptionRequirements extends JsonSerializableType
{
    /**
     * @var ?array<int> $allowedDaysSupply
     */
    #[JsonProperty('allowedDaysSupply'), ArrayType(['integer'])]
    public ?array $allowedDaysSupply;

    /**
     * @var ?array<ListCatalogItemsResponseDataItemPrescriptionRequirementsAllowedQuantitiesItem> $allowedQuantities
     */
    #[JsonProperty('allowedQuantities'), ArrayType([ListCatalogItemsResponseDataItemPrescriptionRequirementsAllowedQuantitiesItem::class])]
    public ?array $allowedQuantities;

    /**
     * @var ?array<value-of<ListCatalogItemsResponseDataItemPrescriptionRequirementsAllowedReasonCategoriesItem>> $allowedReasonCategories
     */
    #[JsonProperty('allowedReasonCategories'), ArrayType(['string'])]
    public ?array $allowedReasonCategories;

    /**
     * @var ?array<string, ?string> $reasonCategoryLabels
     */
    #[JsonProperty('reasonCategoryLabels'), ArrayType(['string' => new Union('string', 'null')])]
    public ?array $reasonCategoryLabels;

    /**
     * @var value-of<ListCatalogItemsResponseDataItemPrescriptionRequirementsCompoundingReason> $compoundingReason
     */
    #[JsonProperty('compoundingReason')]
    public string $compoundingReason;

    /**
     * @var ?value-of<ListCatalogItemsResponseDataItemPrescriptionRequirementsCompoundingReasonContext> $compoundingReasonContext
     */
    #[JsonProperty('compoundingReasonContext')]
    public ?string $compoundingReasonContext;

    /**
     * @var ?value-of<ListCatalogItemsResponseDataItemPrescriptionRequirementsControlledSchedule> $controlledSchedule
     */
    #[JsonProperty('controlledSchedule')]
    public ?string $controlledSchedule;

    /**
     * @var ?int $defaultDaysSupply
     */
    #[JsonProperty('defaultDaysSupply')]
    public ?int $defaultDaysSupply;

    /**
     * @var ?ListCatalogItemsResponseDataItemPrescriptionRequirementsDefaultQuantity $defaultQuantity
     */
    #[JsonProperty('defaultQuantity')]
    public ?ListCatalogItemsResponseDataItemPrescriptionRequirementsDefaultQuantity $defaultQuantity;

    /**
     * @var ?ListCatalogItemsResponseDataItemPrescriptionRequirementsQuantityIncrement $quantityIncrement
     */
    #[JsonProperty('quantityIncrement')]
    public ?ListCatalogItemsResponseDataItemPrescriptionRequirementsQuantityIncrement $quantityIncrement;

    /**
     * @var ?array<string> $defaultSigs
     */
    #[JsonProperty('defaultSigs'), ArrayType(['string'])]
    public ?array $defaultSigs;

    /**
     * @var value-of<ListCatalogItemsResponseDataItemPrescriptionRequirementsDiagnosis> $diagnosis
     */
    #[JsonProperty('diagnosis')]
    public string $diagnosis;

    /**
     * @var ?value-of<ListCatalogItemsResponseDataItemPrescriptionRequirementsMedicationReview> $medicationReview
     */
    #[JsonProperty('medicationReview')]
    public ?string $medicationReview;

    /**
     * @var ?value-of<ListCatalogItemsResponseDataItemPrescriptionRequirementsDiagnosisReview> $diagnosisReview
     */
    #[JsonProperty('diagnosisReview')]
    public ?string $diagnosisReview;

    /**
     * @var ?int $maxRefills
     */
    #[JsonProperty('maxRefills')]
    public ?int $maxRefills;

    /**
     * @var ?array<string> $notes
     */
    #[JsonProperty('notes'), ArrayType(['string'])]
    public ?array $notes;

    /**
     * @var value-of<ListCatalogItemsResponseDataItemPrescriptionRequirementsPharmacyNotes> $pharmacyNotes
     */
    #[JsonProperty('pharmacyNotes')]
    public string $pharmacyNotes;

    /**
     * @var value-of<ListCatalogItemsResponseDataItemPrescriptionRequirementsRefills> $refills
     */
    #[JsonProperty('refills')]
    public string $refills;

    /**
     * @var value-of<ListCatalogItemsResponseDataItemPrescriptionRequirementsSubstitution> $substitution
     */
    #[JsonProperty('substitution')]
    public string $substitution;

    /**
     * @param array{
     *   compoundingReason: value-of<ListCatalogItemsResponseDataItemPrescriptionRequirementsCompoundingReason>,
     *   diagnosis: value-of<ListCatalogItemsResponseDataItemPrescriptionRequirementsDiagnosis>,
     *   pharmacyNotes: value-of<ListCatalogItemsResponseDataItemPrescriptionRequirementsPharmacyNotes>,
     *   refills: value-of<ListCatalogItemsResponseDataItemPrescriptionRequirementsRefills>,
     *   substitution: value-of<ListCatalogItemsResponseDataItemPrescriptionRequirementsSubstitution>,
     *   allowedDaysSupply?: ?array<int>,
     *   allowedQuantities?: ?array<ListCatalogItemsResponseDataItemPrescriptionRequirementsAllowedQuantitiesItem>,
     *   allowedReasonCategories?: ?array<value-of<ListCatalogItemsResponseDataItemPrescriptionRequirementsAllowedReasonCategoriesItem>>,
     *   reasonCategoryLabels?: ?array<string, ?string>,
     *   compoundingReasonContext?: ?value-of<ListCatalogItemsResponseDataItemPrescriptionRequirementsCompoundingReasonContext>,
     *   controlledSchedule?: ?value-of<ListCatalogItemsResponseDataItemPrescriptionRequirementsControlledSchedule>,
     *   defaultDaysSupply?: ?int,
     *   defaultQuantity?: ?ListCatalogItemsResponseDataItemPrescriptionRequirementsDefaultQuantity,
     *   quantityIncrement?: ?ListCatalogItemsResponseDataItemPrescriptionRequirementsQuantityIncrement,
     *   defaultSigs?: ?array<string>,
     *   medicationReview?: ?value-of<ListCatalogItemsResponseDataItemPrescriptionRequirementsMedicationReview>,
     *   diagnosisReview?: ?value-of<ListCatalogItemsResponseDataItemPrescriptionRequirementsDiagnosisReview>,
     *   maxRefills?: ?int,
     *   notes?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->allowedDaysSupply = $values['allowedDaysSupply'] ?? null;
        $this->allowedQuantities = $values['allowedQuantities'] ?? null;
        $this->allowedReasonCategories = $values['allowedReasonCategories'] ?? null;
        $this->reasonCategoryLabels = $values['reasonCategoryLabels'] ?? null;
        $this->compoundingReason = $values['compoundingReason'];
        $this->compoundingReasonContext = $values['compoundingReasonContext'] ?? null;
        $this->controlledSchedule = $values['controlledSchedule'] ?? null;
        $this->defaultDaysSupply = $values['defaultDaysSupply'] ?? null;
        $this->defaultQuantity = $values['defaultQuantity'] ?? null;
        $this->quantityIncrement = $values['quantityIncrement'] ?? null;
        $this->defaultSigs = $values['defaultSigs'] ?? null;
        $this->diagnosis = $values['diagnosis'];
        $this->medicationReview = $values['medicationReview'] ?? null;
        $this->diagnosisReview = $values['diagnosisReview'] ?? null;
        $this->maxRefills = $values['maxRefills'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->pharmacyNotes = $values['pharmacyNotes'];
        $this->refills = $values['refills'];
        $this->substitution = $values['substitution'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
