<?php

namespace Affinity\Orders\Prescriptions\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\Union;

class UpdateOrderPrescriptionRequestPrescription extends JsonSerializableType
{
    /**
     * @var ?UpdateOrderPrescriptionRequestPrescriptionClinical $clinical
     */
    #[JsonProperty('clinical')]
    public ?UpdateOrderPrescriptionRequestPrescriptionClinical $clinical;

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
     * @var UpdateOrderPrescriptionRequestPrescriptionDispensing $dispensing
     */
    #[JsonProperty('dispensing')]
    public UpdateOrderPrescriptionRequestPrescriptionDispensing $dispensing;

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
     *   |value-of<UpdateOrderPrescriptionRequestPrescriptionQuantityOne>
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
     * @var ?UpdateOrderPrescriptionRequestPrescriptionStructuredSig $structuredSig
     */
    #[JsonProperty('structuredSig')]
    public ?UpdateOrderPrescriptionRequestPrescriptionStructuredSig $structuredSig;

    /**
     * @param array{
     *   daysSupply: int,
     *   dispensing: UpdateOrderPrescriptionRequestPrescriptionDispensing,
     *   directions: string,
     *   medicationId: string,
     *   quantity: (
     *    float
     *   |value-of<UpdateOrderPrescriptionRequestPrescriptionQuantityOne>
     * ),
     *   quantityUnit: string,
     *   refills: int,
     *   clinical?: ?UpdateOrderPrescriptionRequestPrescriptionClinical,
     *   pharmacyId?: ?string,
     *   structuredSig?: ?UpdateOrderPrescriptionRequestPrescriptionStructuredSig,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
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
