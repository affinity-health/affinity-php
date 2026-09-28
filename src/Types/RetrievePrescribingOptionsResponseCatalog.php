<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class RetrievePrescribingOptionsResponseCatalog extends JsonSerializableType
{
    /**
     * @var RetrievePrescribingOptionsResponseCatalogCatalogDetails $catalogDetails
     */
    #[JsonProperty('catalogDetails')]
    public RetrievePrescribingOptionsResponseCatalogCatalogDetails $catalogDetails;

    /**
     * @var RetrievePrescribingOptionsResponseCatalogComposition $composition
     */
    #[JsonProperty('composition')]
    public RetrievePrescribingOptionsResponseCatalogComposition $composition;

    /**
     * @var array<string> $allowedStates
     */
    #[JsonProperty('allowedStates'), ArrayType(['string'])]
    public array $allowedStates;

    /**
     * @var value-of<RetrievePrescribingOptionsResponseCatalogAvailability> $availability
     */
    #[JsonProperty('availability')]
    public string $availability;

    /**
     * @var string $catalogKind
     */
    #[JsonProperty('catalogKind')]
    public string $catalogKind;

    /**
     * @var array<RetrievePrescribingOptionsResponseCatalogFulfillmentInclusionsItem> $fulfillmentInclusions
     */
    #[JsonProperty('fulfillmentInclusions'), ArrayType([RetrievePrescribingOptionsResponseCatalogFulfillmentInclusionsItem::class])]
    public array $fulfillmentInclusions;

    /**
     * @var RetrievePrescribingOptionsResponseCatalogOrdering $ordering
     */
    #[JsonProperty('ordering')]
    public RetrievePrescribingOptionsResponseCatalogOrdering $ordering;

    /**
     * @var ?string $category
     */
    #[JsonProperty('category')]
    public ?string $category;

    /**
     * @var bool $coldShip
     */
    #[JsonProperty('coldShip')]
    public bool $coldShip;

    /**
     * @var string $pharmacyId
     */
    #[JsonProperty('pharmacyId')]
    public string $pharmacyId;

    /**
     * @var string $pharmacyName
     */
    #[JsonProperty('pharmacyName')]
    public string $pharmacyName;

    /**
     * @var string $description
     */
    #[JsonProperty('description')]
    public string $description;

    /**
     * @var string $dosageForm
     */
    #[JsonProperty('dosageForm')]
    public string $dosageForm;

    /**
     * @var string $facilityType
     */
    #[JsonProperty('facilityType')]
    public string $facilityType;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $imageUrl Primary product photo, falling back to dosage-form artwork. Null when neither is available.
     */
    #[JsonProperty('imageUrl')]
    public ?string $imageUrl;

    /**
     * @var array<string> $imageUrls
     */
    #[JsonProperty('imageUrls'), ArrayType(['string'])]
    public array $imageUrls;

    /**
     * @var ?RetrievePrescribingOptionsResponseCatalogMedicationGroup $medicationGroup
     */
    #[JsonProperty('medicationGroup')]
    public ?RetrievePrescribingOptionsResponseCatalogMedicationGroup $medicationGroup;

    /**
     * @var bool $isOrderable
     */
    #[JsonProperty('isOrderable')]
    public bool $isOrderable;

    /**
     * @var bool $livemode
     */
    #[JsonProperty('livemode')]
    public bool $livemode;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var value-of<RetrievePrescribingOptionsResponseCatalogObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var bool $patientSpecificRequired
     */
    #[JsonProperty('patientSpecificRequired')]
    public bool $patientSpecificRequired;

    /**
     * @var ?RetrievePrescribingOptionsResponseCatalogQuantityConstraint $quantityConstraint
     */
    #[JsonProperty('quantityConstraint')]
    public ?RetrievePrescribingOptionsResponseCatalogQuantityConstraint $quantityConstraint;

    /**
     * @var RetrievePrescribingOptionsResponseCatalogPrescriptionRequirements $prescriptionRequirements
     */
    #[JsonProperty('prescriptionRequirements')]
    public RetrievePrescribingOptionsResponseCatalogPrescriptionRequirements $prescriptionRequirements;

    /**
     * @var ?RetrievePrescribingOptionsResponseCatalogPricing $pricing
     */
    #[JsonProperty('pricing')]
    public ?RetrievePrescribingOptionsResponseCatalogPricing $pricing;

    /**
     * @var array<string> $restrictedStates
     */
    #[JsonProperty('restrictedStates'), ArrayType(['string'])]
    public array $restrictedStates;

    /**
     * @var string $route
     */
    #[JsonProperty('route')]
    public string $route;

    /**
     * @var array<RetrievePrescribingOptionsResponseCatalogShippingOptionsItem> $shippingOptions
     */
    #[JsonProperty('shippingOptions'), ArrayType([RetrievePrescribingOptionsResponseCatalogShippingOptionsItem::class])]
    public array $shippingOptions;

    /**
     * @var ?string $strength
     */
    #[JsonProperty('strength')]
    public ?string $strength;

    /**
     * @var ?string $unit
     */
    #[JsonProperty('unit')]
    public ?string $unit;

    /**
     * @param array{
     *   catalogDetails: RetrievePrescribingOptionsResponseCatalogCatalogDetails,
     *   composition: RetrievePrescribingOptionsResponseCatalogComposition,
     *   allowedStates: array<string>,
     *   availability: value-of<RetrievePrescribingOptionsResponseCatalogAvailability>,
     *   catalogKind: string,
     *   fulfillmentInclusions: array<RetrievePrescribingOptionsResponseCatalogFulfillmentInclusionsItem>,
     *   ordering: RetrievePrescribingOptionsResponseCatalogOrdering,
     *   coldShip: bool,
     *   pharmacyId: string,
     *   pharmacyName: string,
     *   description: string,
     *   dosageForm: string,
     *   facilityType: string,
     *   id: string,
     *   imageUrls: array<string>,
     *   isOrderable: bool,
     *   livemode: bool,
     *   name: string,
     *   object: value-of<RetrievePrescribingOptionsResponseCatalogObject>,
     *   patientSpecificRequired: bool,
     *   prescriptionRequirements: RetrievePrescribingOptionsResponseCatalogPrescriptionRequirements,
     *   restrictedStates: array<string>,
     *   route: string,
     *   shippingOptions: array<RetrievePrescribingOptionsResponseCatalogShippingOptionsItem>,
     *   category?: ?string,
     *   imageUrl?: ?string,
     *   medicationGroup?: ?RetrievePrescribingOptionsResponseCatalogMedicationGroup,
     *   quantityConstraint?: ?RetrievePrescribingOptionsResponseCatalogQuantityConstraint,
     *   pricing?: ?RetrievePrescribingOptionsResponseCatalogPricing,
     *   strength?: ?string,
     *   unit?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->catalogDetails = $values['catalogDetails'];
        $this->composition = $values['composition'];
        $this->allowedStates = $values['allowedStates'];
        $this->availability = $values['availability'];
        $this->catalogKind = $values['catalogKind'];
        $this->fulfillmentInclusions = $values['fulfillmentInclusions'];
        $this->ordering = $values['ordering'];
        $this->category = $values['category'] ?? null;
        $this->coldShip = $values['coldShip'];
        $this->pharmacyId = $values['pharmacyId'];
        $this->pharmacyName = $values['pharmacyName'];
        $this->description = $values['description'];
        $this->dosageForm = $values['dosageForm'];
        $this->facilityType = $values['facilityType'];
        $this->id = $values['id'];
        $this->imageUrl = $values['imageUrl'] ?? null;
        $this->imageUrls = $values['imageUrls'];
        $this->medicationGroup = $values['medicationGroup'] ?? null;
        $this->isOrderable = $values['isOrderable'];
        $this->livemode = $values['livemode'];
        $this->name = $values['name'];
        $this->object = $values['object'];
        $this->patientSpecificRequired = $values['patientSpecificRequired'];
        $this->quantityConstraint = $values['quantityConstraint'] ?? null;
        $this->prescriptionRequirements = $values['prescriptionRequirements'];
        $this->pricing = $values['pricing'] ?? null;
        $this->restrictedStates = $values['restrictedStates'];
        $this->route = $values['route'];
        $this->shippingOptions = $values['shippingOptions'];
        $this->strength = $values['strength'] ?? null;
        $this->unit = $values['unit'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
