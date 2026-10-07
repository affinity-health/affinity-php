<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;
use Affinity\Core\Types\Union;

class CreateOrderBatchResponseOrdersItem extends JsonSerializableType
{
    /**
     * @var string $revision Opaque revision of the complete order prescription set. Send the revision you reviewed as expectedRevision; never replace it automatically after a conflict.
     */
    #[JsonProperty('revision')]
    public string $revision;

    /**
     * @var array<CreateOrderBatchResponseOrdersItemOtcItemsItem> $otcItems
     */
    #[JsonProperty('otcItems'), ArrayType([CreateOrderBatchResponseOrdersItemOtcItemsItem::class])]
    public array $otcItems;

    /**
     * @var ?string $externalOrderId
     */
    #[JsonProperty('externalOrderId')]
    public ?string $externalOrderId;

    /**
     * @var array<string, (
     *    string
     *   |float
     *   |bool
     * )|null> $metadata
     */
    #[JsonProperty('metadata'), ArrayType(['string' => new Union(new Union('string', 'float', 'bool'), 'null')])]
    public array $metadata;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var bool $livemode
     */
    #[JsonProperty('livemode')]
    public bool $livemode;

    /**
     * @var value-of<CreateOrderBatchResponseOrdersItemObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var string $patientId
     */
    #[JsonProperty('patientId')]
    public string $patientId;

    /**
     * @var string $practiceId
     */
    #[JsonProperty('practiceId')]
    public string $practiceId;

    /**
     * @var array<CreateOrderBatchResponseOrdersItemPrescriptionsItem> $prescriptions
     */
    #[JsonProperty('prescriptions'), ArrayType([CreateOrderBatchResponseOrdersItemPrescriptionsItem::class])]
    public array $prescriptions;

    /**
     * @var ?string $userId
     */
    #[JsonProperty('userId')]
    public ?string $userId;

    /**
     * @var value-of<CreateOrderBatchResponseOrdersItemStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @param array{
     *   revision: string,
     *   otcItems: array<CreateOrderBatchResponseOrdersItemOtcItemsItem>,
     *   metadata: array<string, (
     *    string
     *   |float
     *   |bool
     * )|null>,
     *   createdAt: string,
     *   id: string,
     *   livemode: bool,
     *   object: value-of<CreateOrderBatchResponseOrdersItemObject>,
     *   patientId: string,
     *   practiceId: string,
     *   prescriptions: array<CreateOrderBatchResponseOrdersItemPrescriptionsItem>,
     *   status: value-of<CreateOrderBatchResponseOrdersItemStatus>,
     *   externalOrderId?: ?string,
     *   userId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->revision = $values['revision'];
        $this->otcItems = $values['otcItems'];
        $this->externalOrderId = $values['externalOrderId'] ?? null;
        $this->metadata = $values['metadata'];
        $this->createdAt = $values['createdAt'];
        $this->id = $values['id'];
        $this->livemode = $values['livemode'];
        $this->object = $values['object'];
        $this->patientId = $values['patientId'];
        $this->practiceId = $values['practiceId'];
        $this->prescriptions = $values['prescriptions'];
        $this->userId = $values['userId'] ?? null;
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
