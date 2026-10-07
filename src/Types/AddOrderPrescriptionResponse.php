<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;
use Affinity\Core\Types\Union;

class AddOrderPrescriptionResponse extends JsonSerializableType
{
    /**
     * @var string $revision Opaque revision of the complete order prescription set. Send the revision you reviewed as expectedRevision; never replace it automatically after a conflict.
     */
    #[JsonProperty('revision')]
    public string $revision;

    /**
     * @var value-of<AddOrderPrescriptionResponseObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

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
     * @var array<AddOrderPrescriptionResponsePrescriptionsItem> $prescriptions
     */
    #[JsonProperty('prescriptions'), ArrayType([AddOrderPrescriptionResponsePrescriptionsItem::class])]
    public array $prescriptions;

    /**
     * @param array{
     *   revision: string,
     *   object: value-of<AddOrderPrescriptionResponseObject>,
     *   metadata: array<string, (
     *    string
     *   |float
     *   |bool
     * )|null>,
     *   orderId: string,
     *   prescriptionId: string,
     *   prescriptions: array<AddOrderPrescriptionResponsePrescriptionsItem>,
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
