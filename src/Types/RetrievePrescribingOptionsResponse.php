<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class RetrievePrescribingOptionsResponse extends JsonSerializableType
{
    /**
     * @var RetrievePrescribingOptionsResponseCompoundingReason $compoundingReason
     */
    #[JsonProperty('compoundingReason')]
    public RetrievePrescribingOptionsResponseCompoundingReason $compoundingReason;

    /**
     * @var ?value-of<RetrievePrescribingOptionsResponseCompoundingReasonCategoryDefault> $compoundingReasonCategoryDefault
     */
    #[JsonProperty('compoundingReasonCategoryDefault')]
    public ?string $compoundingReasonCategoryDefault;

    /**
     * @var ?string $compoundingReasonDefault
     */
    #[JsonProperty('compoundingReasonDefault')]
    public ?string $compoundingReasonDefault;

    /**
     * @var ?RetrievePrescribingOptionsResponseDefault $default
     */
    #[JsonProperty('default')]
    public ?RetrievePrescribingOptionsResponseDefault $default;

    /**
     * @var ?RetrievePrescribingOptionsResponseFormulationDefault $formulationDefault
     */
    #[JsonProperty('formulationDefault')]
    public ?RetrievePrescribingOptionsResponseFormulationDefault $formulationDefault;

    /**
     * @var RetrievePrescribingOptionsResponseInitial $initial
     */
    #[JsonProperty('initial')]
    public RetrievePrescribingOptionsResponseInitial $initial;

    /**
     * @var RetrievePrescribingOptionsResponseMedication $medication
     */
    #[JsonProperty('medication')]
    public RetrievePrescribingOptionsResponseMedication $medication;

    /**
     * @var RetrievePrescribingOptionsResponseOptions $options
     */
    #[JsonProperty('options')]
    public RetrievePrescribingOptionsResponseOptions $options;

    /**
     * @var array<RetrievePrescribingOptionsResponsePharmacyDirectionsItem> $pharmacyDirections
     */
    #[JsonProperty('pharmacyDirections'), ArrayType([RetrievePrescribingOptionsResponsePharmacyDirectionsItem::class])]
    public array $pharmacyDirections;

    /**
     * @var array<RetrievePrescribingOptionsResponseTemplatesItem> $templates
     */
    #[JsonProperty('templates'), ArrayType([RetrievePrescribingOptionsResponseTemplatesItem::class])]
    public array $templates;

    /**
     * @var value-of<RetrievePrescribingOptionsResponseObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var string $catalogItemId
     */
    #[JsonProperty('catalogItemId')]
    public string $catalogItemId;

    /**
     * @var string $practiceId
     */
    #[JsonProperty('practiceId')]
    public string $practiceId;

    /**
     * @var bool $livemode
     */
    #[JsonProperty('livemode')]
    public bool $livemode;

    /**
     * @var string $revision
     */
    #[JsonProperty('revision')]
    public string $revision;

    /**
     * @var RetrievePrescribingOptionsResponseCatalog $catalog
     */
    #[JsonProperty('catalog')]
    public RetrievePrescribingOptionsResponseCatalog $catalog;

    /**
     * @var ?string $defaultPresetId
     */
    #[JsonProperty('defaultPresetId')]
    public ?string $defaultPresetId;

    /**
     * @var array<RetrievePrescribingOptionsResponsePresetsItem> $presets
     */
    #[JsonProperty('presets'), ArrayType([RetrievePrescribingOptionsResponsePresetsItem::class])]
    public array $presets;

    /**
     * @param array{
     *   compoundingReason: RetrievePrescribingOptionsResponseCompoundingReason,
     *   initial: RetrievePrescribingOptionsResponseInitial,
     *   medication: RetrievePrescribingOptionsResponseMedication,
     *   options: RetrievePrescribingOptionsResponseOptions,
     *   pharmacyDirections: array<RetrievePrescribingOptionsResponsePharmacyDirectionsItem>,
     *   templates: array<RetrievePrescribingOptionsResponseTemplatesItem>,
     *   object: value-of<RetrievePrescribingOptionsResponseObject>,
     *   catalogItemId: string,
     *   practiceId: string,
     *   livemode: bool,
     *   revision: string,
     *   catalog: RetrievePrescribingOptionsResponseCatalog,
     *   presets: array<RetrievePrescribingOptionsResponsePresetsItem>,
     *   compoundingReasonCategoryDefault?: ?value-of<RetrievePrescribingOptionsResponseCompoundingReasonCategoryDefault>,
     *   compoundingReasonDefault?: ?string,
     *   default?: ?RetrievePrescribingOptionsResponseDefault,
     *   formulationDefault?: ?RetrievePrescribingOptionsResponseFormulationDefault,
     *   defaultPresetId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->compoundingReason = $values['compoundingReason'];
        $this->compoundingReasonCategoryDefault = $values['compoundingReasonCategoryDefault'] ?? null;
        $this->compoundingReasonDefault = $values['compoundingReasonDefault'] ?? null;
        $this->default = $values['default'] ?? null;
        $this->formulationDefault = $values['formulationDefault'] ?? null;
        $this->initial = $values['initial'];
        $this->medication = $values['medication'];
        $this->options = $values['options'];
        $this->pharmacyDirections = $values['pharmacyDirections'];
        $this->templates = $values['templates'];
        $this->object = $values['object'];
        $this->catalogItemId = $values['catalogItemId'];
        $this->practiceId = $values['practiceId'];
        $this->livemode = $values['livemode'];
        $this->revision = $values['revision'];
        $this->catalog = $values['catalog'];
        $this->defaultPresetId = $values['defaultPresetId'] ?? null;
        $this->presets = $values['presets'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
