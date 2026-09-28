<?php

namespace Affinity\Orders\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;
use Affinity\Core\Types\Union;

class CreateOrderBatchRequestOrdersItem extends JsonSerializableType
{
    /**
     * @var ?array<CreateOrderBatchRequestOrdersItemOtcItemsItem> $otcItems
     */
    #[JsonProperty('otcItems'), ArrayType([CreateOrderBatchRequestOrdersItemOtcItemsItem::class])]
    public ?array $otcItems;

    /**
     * @var ?string $externalOrderId
     */
    #[JsonProperty('externalOrderId')]
    public ?string $externalOrderId;

    /**
     * @var ?array<string, (
     *    string
     *   |float
     *   |bool
     * )|null> $metadata
     */
    #[JsonProperty('metadata'), ArrayType(['string' => new Union(new Union('string', 'float', 'bool'), 'null')])]
    public ?array $metadata;

    /**
     * @var ?string $patientId
     */
    #[JsonProperty('patientId')]
    public ?string $patientId;

    /**
     * @var ?CreateOrderBatchRequestOrdersItemPatient $patient
     */
    #[JsonProperty('patient')]
    public ?CreateOrderBatchRequestOrdersItemPatient $patient;

    /**
     * @var ?string $shippingAddressId
     */
    #[JsonProperty('shippingAddressId')]
    public ?string $shippingAddressId;

    /**
     * @var array<CreateOrderBatchRequestOrdersItemPrescriptionsItem> $prescriptions
     */
    #[JsonProperty('prescriptions'), ArrayType([CreateOrderBatchRequestOrdersItemPrescriptionsItem::class])]
    public array $prescriptions;

    /**
     * @param array{
     *   prescriptions: array<CreateOrderBatchRequestOrdersItemPrescriptionsItem>,
     *   otcItems?: ?array<CreateOrderBatchRequestOrdersItemOtcItemsItem>,
     *   externalOrderId?: ?string,
     *   metadata?: ?array<string, (
     *    string
     *   |float
     *   |bool
     * )|null>,
     *   patientId?: ?string,
     *   patient?: ?CreateOrderBatchRequestOrdersItemPatient,
     *   shippingAddressId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->otcItems = $values['otcItems'] ?? null;
        $this->externalOrderId = $values['externalOrderId'] ?? null;
        $this->metadata = $values['metadata'] ?? null;
        $this->patientId = $values['patientId'] ?? null;
        $this->patient = $values['patient'] ?? null;
        $this->shippingAddressId = $values['shippingAddressId'] ?? null;
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
