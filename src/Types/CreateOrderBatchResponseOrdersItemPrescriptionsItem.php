<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\Union;

class CreateOrderBatchResponseOrdersItemPrescriptionsItem extends JsonSerializableType
{
    /**
     * @var string $pharmacyId
     */
    #[JsonProperty('pharmacyId')]
    public string $pharmacyId;

    /**
     * @var ?string $externalPrescriptionId
     */
    #[JsonProperty('externalPrescriptionId')]
    public ?string $externalPrescriptionId;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $directions
     */
    #[JsonProperty('directions')]
    public string $directions;

    /**
     * @var int $version
     */
    #[JsonProperty('version')]
    public int $version;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $medicationId
     */
    #[JsonProperty('medicationId')]
    public ?string $medicationId;

    /**
     * @var string $medicationName
     */
    #[JsonProperty('medicationName')]
    public string $medicationName;

    /**
     * @var value-of<CreateOrderBatchResponseOrdersItemPrescriptionsItemObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var (
     *    float
     *   |value-of<CreateOrderBatchResponseOrdersItemPrescriptionsItemQuantityOne>
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
     * @var value-of<CreateOrderBatchResponseOrdersItemPrescriptionsItemStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @param array{
     *   pharmacyId: string,
     *   createdAt: string,
     *   directions: string,
     *   version: int,
     *   id: string,
     *   medicationName: string,
     *   object: value-of<CreateOrderBatchResponseOrdersItemPrescriptionsItemObject>,
     *   quantity: (
     *    float
     *   |value-of<CreateOrderBatchResponseOrdersItemPrescriptionsItemQuantityOne>
     * ),
     *   quantityUnit: string,
     *   refills: int,
     *   status: value-of<CreateOrderBatchResponseOrdersItemPrescriptionsItemStatus>,
     *   externalPrescriptionId?: ?string,
     *   medicationId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->pharmacyId = $values['pharmacyId'];
        $this->externalPrescriptionId = $values['externalPrescriptionId'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->directions = $values['directions'];
        $this->version = $values['version'];
        $this->id = $values['id'];
        $this->medicationId = $values['medicationId'] ?? null;
        $this->medicationName = $values['medicationName'];
        $this->object = $values['object'];
        $this->quantity = $values['quantity'];
        $this->quantityUnit = $values['quantityUnit'];
        $this->refills = $values['refills'];
        $this->status = $values['status'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
