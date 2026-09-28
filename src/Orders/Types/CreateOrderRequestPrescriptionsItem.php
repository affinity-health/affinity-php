<?php

namespace Affinity\Orders\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\Union;

class CreateOrderRequestPrescriptionsItem extends JsonSerializableType
{
    /**
     * @var ?string $externalPrescriptionId
     */
    #[JsonProperty('externalPrescriptionId')]
    public ?string $externalPrescriptionId;

    /**
     * @var ?CreateOrderRequestPrescriptionsItemClinical $clinical
     */
    #[JsonProperty('clinical')]
    public ?CreateOrderRequestPrescriptionsItemClinical $clinical;

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
     * @var CreateOrderRequestPrescriptionsItemDispensing $dispensing
     */
    #[JsonProperty('dispensing')]
    public CreateOrderRequestPrescriptionsItemDispensing $dispensing;

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
     * @var (
     *    float
     *   |value-of<CreateOrderRequestPrescriptionsItemQuantityOne>
     * ) $quantity
     */
    #[JsonProperty('quantity'), Union('float', 'string')]
    public float|string $quantity;

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
     * @var ?CreateOrderRequestPrescriptionsItemStructuredSig $structuredSig
     */
    #[JsonProperty('structuredSig')]
    public ?CreateOrderRequestPrescriptionsItemStructuredSig $structuredSig;

    /**
     * @param array{
     *   daysSupply: int,
     *   dispensing: CreateOrderRequestPrescriptionsItemDispensing,
     *   directions: string,
     *   medicationId: string,
     *   quantity: (
     *    float
     *   |value-of<CreateOrderRequestPrescriptionsItemQuantityOne>
     * ),
     *   quantityUnit: string,
     *   refills: int,
     *   externalPrescriptionId?: ?string,
     *   clinical?: ?CreateOrderRequestPrescriptionsItemClinical,
     *   pharmacyId?: ?string,
     *   structuredSig?: ?CreateOrderRequestPrescriptionsItemStructuredSig,
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
