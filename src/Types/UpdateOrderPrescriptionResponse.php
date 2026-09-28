<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class UpdateOrderPrescriptionResponse extends JsonSerializableType
{
    /**
     * @var string $revision Opaque revision of the complete order prescription set. Send the revision you reviewed as expectedRevision; never replace it automatically after a conflict.
     */
    #[JsonProperty('revision')]
    public string $revision;

    /**
     * @var value-of<UpdateOrderPrescriptionResponseObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var ?string $externalOrderId
     */
    #[JsonProperty('externalOrderId')]
    public ?string $externalOrderId;

    /**
     * @var UpdateOrderPrescriptionResponseMetadata $metadata
     */
    #[JsonProperty('metadata')]
    public UpdateOrderPrescriptionResponseMetadata $metadata;

    /**
     * @var string $orderId
     */
    #[JsonProperty('orderId')]
    public string $orderId;

    /**
     * @var string $prescriptionId
     */
    #[JsonProperty('prescriptionId')]
    public string $prescriptionId;

    /**
     * @var array<UpdateOrderPrescriptionResponsePrescriptionsItem> $prescriptions
     */
    #[JsonProperty('prescriptions'), ArrayType([UpdateOrderPrescriptionResponsePrescriptionsItem::class])]
    public array $prescriptions;

    /**
     * @param array{
     *   revision: string,
     *   object: value-of<UpdateOrderPrescriptionResponseObject>,
     *   metadata: UpdateOrderPrescriptionResponseMetadata,
     *   orderId: string,
     *   prescriptionId: string,
     *   prescriptions: array<UpdateOrderPrescriptionResponsePrescriptionsItem>,
     *   externalOrderId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->revision = $values['revision'];
        $this->object = $values['object'];
        $this->externalOrderId = $values['externalOrderId'] ?? null;
        $this->metadata = $values['metadata'];
        $this->orderId = $values['orderId'];
        $this->prescriptionId = $values['prescriptionId'];
        $this->prescriptions = $values['prescriptions'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
