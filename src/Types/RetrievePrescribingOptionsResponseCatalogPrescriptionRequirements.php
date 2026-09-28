<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;
use Affinity\Core\Types\Union;

class RetrievePrescribingOptionsResponseCatalogPrescriptionRequirements extends JsonSerializableType
{
    /**
     * @var ?array<int> $allowedDaysSupply
     */
    #[JsonProperty('allowedDaysSupply'), ArrayType(['integer'])]
    public ?array $allowedDaysSupply;

    /**
     * @var ?array<RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsAllowedQuantitiesItem> $allowedQuantities
     */
    #[JsonProperty('allowedQuantities'), ArrayType([RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsAllowedQuantitiesItem::class])]
    public ?array $allowedQuantities;

    /**
     * @var ?array<value-of<RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsAllowedReasonCategoriesItem>> $allowedReasonCategories
     */
    #[JsonProperty('allowedReasonCategories'), ArrayType(['string'])]
    public ?array $allowedReasonCategories;

    /**
     * @var ?array<string, ?string> $reasonCategoryLabels
     */
    #[JsonProperty('reasonCategoryLabels'), ArrayType(['string' => new Union('string', 'null')])]
    public ?array $reasonCategoryLabels;

    /**
     * @var value-of<RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsCompoundingReason> $compoundingReason
     */
    #[JsonProperty('compoundingReason')]
    public string $compoundingReason;

    /**
     * @var ?value-of<RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsCompoundingReasonContext> $compoundingReasonContext
     */
    #[JsonProperty('compoundingReasonContext')]
    public ?string $compoundingReasonContext;

    /**
     * @var ?value-of<RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsControlledSchedule> $controlledSchedule
     */
    #[JsonProperty('controlledSchedule')]
    public ?string $controlledSchedule;

    /**
     * @var ?int $defaultDaysSupply
     */
    #[JsonProperty('defaultDaysSupply')]
    public ?int $defaultDaysSupply;

    /**
     * @var ?RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsDefaultQuantity $defaultQuantity
     */
    #[JsonProperty('defaultQuantity')]
    public ?RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsDefaultQuantity $defaultQuantity;

    /**
     * @var ?RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsQuantityIncrement $quantityIncrement
     */
    #[JsonProperty('quantityIncrement')]
    public ?RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsQuantityIncrement $quantityIncrement;

    /**
     * @var ?array<string> $defaultSigs
     */
    #[JsonProperty('defaultSigs'), ArrayType(['string'])]
    public ?array $defaultSigs;

    /**
     * @var value-of<RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsDiagnosis> $diagnosis
     */
    #[JsonProperty('diagnosis')]
    public string $diagnosis;

    /**
     * @var ?value-of<RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsMedicationReview> $medicationReview
     */
    #[JsonProperty('medicationReview')]
    public ?string $medicationReview;

    /**
     * @var ?value-of<RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsDiagnosisReview> $diagnosisReview
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
     * @var value-of<RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsPharmacyNotes> $pharmacyNotes
     */
    #[JsonProperty('pharmacyNotes')]
    public string $pharmacyNotes;

    /**
     * @var value-of<RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsRefills> $refills
     */
    #[JsonProperty('refills')]
    public string $refills;

    /**
     * @var value-of<RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsSubstitution> $substitution
     */
    #[JsonProperty('substitution')]
    public string $substitution;

    /**
     * @param array{
     *   compoundingReason: value-of<RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsCompoundingReason>,
     *   diagnosis: value-of<RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsDiagnosis>,
     *   pharmacyNotes: value-of<RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsPharmacyNotes>,
     *   refills: value-of<RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsRefills>,
     *   substitution: value-of<RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsSubstitution>,
     *   allowedDaysSupply?: ?array<int>,
     *   allowedQuantities?: ?array<RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsAllowedQuantitiesItem>,
     *   allowedReasonCategories?: ?array<value-of<RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsAllowedReasonCategoriesItem>>,
     *   reasonCategoryLabels?: ?array<string, ?string>,
     *   compoundingReasonContext?: ?value-of<RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsCompoundingReasonContext>,
     *   controlledSchedule?: ?value-of<RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsControlledSchedule>,
     *   defaultDaysSupply?: ?int,
     *   defaultQuantity?: ?RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsDefaultQuantity,
     *   quantityIncrement?: ?RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsQuantityIncrement,
     *   defaultSigs?: ?array<string>,
     *   medicationReview?: ?value-of<RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsMedicationReview>,
     *   diagnosisReview?: ?value-of<RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsDiagnosisReview>,
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
