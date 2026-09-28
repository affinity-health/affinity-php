<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class PreviewOrderResponseOrderInputPrescriptionsItem extends JsonSerializableType
{
    /**
     * @var ?string $externalPrescriptionId
     */
    #[JsonProperty('externalPrescriptionId')]
    public ?string $externalPrescriptionId;

    /**
     * @var ?PreviewOrderResponseOrderInputPrescriptionsItemClinical $clinical
     */
    #[JsonProperty('clinical')]
    public ?PreviewOrderResponseOrderInputPrescriptionsItemClinical $clinical;

    /**
     * @var ?string $pharmacyId
     */
    #[JsonProperty('pharmacyId')]
    public ?string $pharmacyId;

    /**
     * @var int $daysSupply
     */
    #[JsonProperty('daysSupply')]
    public int $daysSupply;

    /**
     * @var PreviewOrderResponseOrderInputPrescriptionsItemDispensing $dispensing
     */
    #[JsonProperty('dispensing')]
    public PreviewOrderResponseOrderInputPrescriptionsItemDispensing $dispensing;

    /**
     * @var string $directions
     */
    #[JsonProperty('directions')]
    public string $directions;

    /**
     * @var string $medicationId
     */
    #[JsonProperty('medicationId')]
    public string $medicationId;

    /**
     * @var float $quantity
     */
    #[JsonProperty('quantity')]
    public float $quantity;

    /**
     * @var string $quantityUnit
     */
    #[JsonProperty('quantityUnit')]
    public string $quantityUnit;

    /**
     * @var int $refills
     */
    #[JsonProperty('refills')]
    public int $refills;

    /**
     * @var ?PreviewOrderResponseOrderInputPrescriptionsItemStructuredSig $structuredSig
     */
    #[JsonProperty('structuredSig')]
    public ?PreviewOrderResponseOrderInputPrescriptionsItemStructuredSig $structuredSig;

    /**
     * @param array{
     *   daysSupply: int,
     *   dispensing: PreviewOrderResponseOrderInputPrescriptionsItemDispensing,
     *   directions: string,
     *   medicationId: string,
     *   quantity: float,
     *   quantityUnit: string,
     *   refills: int,
     *   externalPrescriptionId?: ?string,
     *   clinical?: ?PreviewOrderResponseOrderInputPrescriptionsItemClinical,
     *   pharmacyId?: ?string,
     *   structuredSig?: ?PreviewOrderResponseOrderInputPrescriptionsItemStructuredSig,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->externalPrescriptionId = $values['externalPrescriptionId'] ?? null;
        $this->clinical = $values['clinical'] ?? null;
        $this->pharmacyId = $values['pharmacyId'] ?? null;
        $this->daysSupply = $values['daysSupply'];
        $this->dispensing = $values['dispensing'];
        $this->directions = $values['directions'];
        $this->medicationId = $values['medicationId'];
        $this->quantity = $values['quantity'];
        $this->quantityUnit = $values['quantityUnit'];
        $this->refills = $values['refills'];
        $this->structuredSig = $values['structuredSig'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
