<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class PreviewOrderResponse extends JsonSerializableType
{
    /**
     * @var bool $clinicalRequirementsSatisfied
     */
    #[JsonProperty('clinicalRequirementsSatisfied')]
    public bool $clinicalRequirementsSatisfied;

    /**
     * @var array<PreviewOrderResponseClinicalIssuesItem> $clinicalIssues
     */
    #[JsonProperty('clinicalIssues'), ArrayType([PreviewOrderResponseClinicalIssuesItem::class])]
    public array $clinicalIssues;

    /**
     * @var array<PreviewOrderResponseClinicalRequirementsItem> $clinicalRequirements
     */
    #[JsonProperty('clinicalRequirements'), ArrayType([PreviewOrderResponseClinicalRequirementsItem::class])]
    public array $clinicalRequirements;

    /**
     * @var array<PreviewOrderResponseOtcItemsItem> $otcItems
     */
    #[JsonProperty('otcItems'), ArrayType([PreviewOrderResponseOtcItemsItem::class])]
    public array $otcItems;

    /**
     * @var array<PreviewOrderResponseShippingGroupsItem> $shippingGroups
     */
    #[JsonProperty('shippingGroups'), ArrayType([PreviewOrderResponseShippingGroupsItem::class])]
    public array $shippingGroups;

    /**
     * @var PreviewOrderResponseTotals $totals
     */
    #[JsonProperty('totals')]
    public PreviewOrderResponseTotals $totals;

    /**
     * @var value-of<PreviewOrderResponseObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var bool $livemode
     */
    #[JsonProperty('livemode')]
    public bool $livemode;

    /**
     * @var array<PreviewOrderResponsePrescriptionsItem> $prescriptions
     */
    #[JsonProperty('prescriptions'), ArrayType([PreviewOrderResponsePrescriptionsItem::class])]
    public array $prescriptions;

    /**
     * @var array<PreviewOrderResponseIssuesItem> $issues
     */
    #[JsonProperty('issues'), ArrayType([PreviewOrderResponseIssuesItem::class])]
    public array $issues;

    /**
     * @var value-of<PreviewOrderResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?PreviewOrderResponseOrderInput $orderInput
     */
    #[JsonProperty('orderInput')]
    public ?PreviewOrderResponseOrderInput $orderInput;

    /**
     * @param array{
     *   clinicalRequirementsSatisfied: bool,
     *   clinicalIssues: array<PreviewOrderResponseClinicalIssuesItem>,
     *   clinicalRequirements: array<PreviewOrderResponseClinicalRequirementsItem>,
     *   otcItems: array<PreviewOrderResponseOtcItemsItem>,
     *   shippingGroups: array<PreviewOrderResponseShippingGroupsItem>,
     *   totals: PreviewOrderResponseTotals,
     *   object: value-of<PreviewOrderResponseObject>,
     *   livemode: bool,
     *   prescriptions: array<PreviewOrderResponsePrescriptionsItem>,
     *   issues: array<PreviewOrderResponseIssuesItem>,
     *   status: value-of<PreviewOrderResponseStatus>,
     *   orderInput?: ?PreviewOrderResponseOrderInput,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->clinicalRequirementsSatisfied = $values['clinicalRequirementsSatisfied'];
        $this->clinicalIssues = $values['clinicalIssues'];
        $this->clinicalRequirements = $values['clinicalRequirements'];
        $this->otcItems = $values['otcItems'];
        $this->shippingGroups = $values['shippingGroups'];
        $this->totals = $values['totals'];
        $this->object = $values['object'];
        $this->livemode = $values['livemode'];
        $this->prescriptions = $values['prescriptions'];
        $this->issues = $values['issues'];
        $this->status = $values['status'];
        $this->orderInput = $values['orderInput'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
