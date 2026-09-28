<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\Union;
use Affinity\Core\Types\ArrayType;

class ListOrdersResponseDataItemPrescriptionsItem extends JsonSerializableType
{
    /**
     * @var int $version
     */
    #[JsonProperty('version')]
    public int $version;

    /**
     * @var (
     *    float
     *   |value-of<ListOrdersResponseDataItemPrescriptionsItemDaysSupplyOne>
     * )|null $daysSupply
     */
    #[JsonProperty('daysSupply'), Union('float', 'string', 'null')]
    public float|string|null $daysSupply;

    /**
     * @var ListOrdersResponseDataItemPrescriptionsItemPatientSnapshot $patientSnapshot
     */
    #[JsonProperty('patientSnapshot')]
    public ListOrdersResponseDataItemPrescriptionsItemPatientSnapshot $patientSnapshot;

    /**
     * @var ?array<string, mixed> $deliveryAddress The saved delivery address for this prescription version. Patient profile updates do not replace it. Review this address before signing.
     */
    #[JsonProperty('deliveryAddress'), ArrayType(['string' => 'mixed'])]
    public ?array $deliveryAddress;

    /**
     * @var bool $deliveryAddressDiffersFromPatient Whether the saved delivery address differs from the current primary patient address. This can be intentional; confirm the delivery address before signing.
     */
    #[JsonProperty('deliveryAddressDiffersFromPatient')]
    public bool $deliveryAddressDiffersFromPatient;

    /**
     * @var ?ListOrdersResponseDataItemPrescriptionsItemProviderSnapshot $providerSnapshot
     */
    #[JsonProperty('providerSnapshot')]
    public ?ListOrdersResponseDataItemPrescriptionsItemProviderSnapshot $providerSnapshot;

    /**
     * @var ?ListOrdersResponseDataItemPrescriptionsItemClinical $clinical
     */
    #[JsonProperty('clinical')]
    public ?ListOrdersResponseDataItemPrescriptionsItemClinical $clinical;

    /**
     * @var ?ListOrdersResponseDataItemPrescriptionsItemDispensing $dispensing
     */
    #[JsonProperty('dispensing')]
    public ?ListOrdersResponseDataItemPrescriptionsItemDispensing $dispensing;

    /**
     * @var ?ListOrdersResponseDataItemPrescriptionsItemStructuredSig $structuredSig
     */
    #[JsonProperty('structuredSig')]
    public ?ListOrdersResponseDataItemPrescriptionsItemStructuredSig $structuredSig;

    /**
     * @var ?string $externalPrescriptionId
     */
    #[JsonProperty('externalPrescriptionId')]
    public ?string $externalPrescriptionId;

    /**
     * @var ?string $catalogItemId
     */
    #[JsonProperty('catalogItemId')]
    public ?string $catalogItemId;

    /**
     * @var ?string $pharmacyId
     */
    #[JsonProperty('pharmacyId')]
    public ?string $pharmacyId;

    /**
     * @var ?string $pharmacyName
     */
    #[JsonProperty('pharmacyName')]
    public ?string $pharmacyName;

    /**
     * @var string $directions
     */
    #[JsonProperty('directions')]
    public string $directions;

    /**
     * @var ?string $dosageForm
     */
    #[JsonProperty('dosageForm')]
    public ?string $dosageForm;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $medicationName
     */
    #[JsonProperty('medicationName')]
    public string $medicationName;

    /**
     * @var (
     *    float
     *   |value-of<ListOrdersResponseDataItemPrescriptionsItemQuantityOne>
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
     * @var string $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $strength
     */
    #[JsonProperty('strength')]
    public ?string $strength;

    /**
     * @param array{
     *   version: int,
     *   patientSnapshot: ListOrdersResponseDataItemPrescriptionsItemPatientSnapshot,
     *   deliveryAddressDiffersFromPatient: bool,
     *   directions: string,
     *   id: string,
     *   medicationName: string,
     *   quantity: (
     *    float
     *   |value-of<ListOrdersResponseDataItemPrescriptionsItemQuantityOne>
     * ),
     *   quantityUnit: string,
     *   refills: int,
     *   status: string,
     *   daysSupply?: (
     *    float
     *   |value-of<ListOrdersResponseDataItemPrescriptionsItemDaysSupplyOne>
     * )|null,
     *   deliveryAddress?: ?array<string, mixed>,
     *   providerSnapshot?: ?ListOrdersResponseDataItemPrescriptionsItemProviderSnapshot,
     *   clinical?: ?ListOrdersResponseDataItemPrescriptionsItemClinical,
     *   dispensing?: ?ListOrdersResponseDataItemPrescriptionsItemDispensing,
     *   structuredSig?: ?ListOrdersResponseDataItemPrescriptionsItemStructuredSig,
     *   externalPrescriptionId?: ?string,
     *   catalogItemId?: ?string,
     *   pharmacyId?: ?string,
     *   pharmacyName?: ?string,
     *   dosageForm?: ?string,
     *   strength?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->version = $values['version'];
        $this->daysSupply = $values['daysSupply'] ?? null;
        $this->patientSnapshot = $values['patientSnapshot'];
        $this->deliveryAddress = $values['deliveryAddress'] ?? null;
        $this->deliveryAddressDiffersFromPatient = $values['deliveryAddressDiffersFromPatient'];
        $this->providerSnapshot = $values['providerSnapshot'] ?? null;
        $this->clinical = $values['clinical'] ?? null;
        $this->dispensing = $values['dispensing'] ?? null;
        $this->structuredSig = $values['structuredSig'] ?? null;
        $this->externalPrescriptionId = $values['externalPrescriptionId'] ?? null;
        $this->catalogItemId = $values['catalogItemId'] ?? null;
        $this->pharmacyId = $values['pharmacyId'] ?? null;
        $this->pharmacyName = $values['pharmacyName'] ?? null;
        $this->directions = $values['directions'];
        $this->dosageForm = $values['dosageForm'] ?? null;
        $this->id = $values['id'];
        $this->medicationName = $values['medicationName'];
        $this->quantity = $values['quantity'];
        $this->quantityUnit = $values['quantityUnit'];
        $this->refills = $values['refills'];
        $this->status = $values['status'];
        $this->strength = $values['strength'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
