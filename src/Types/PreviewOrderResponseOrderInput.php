<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class PreviewOrderResponseOrderInput extends JsonSerializableType
{
    /**
     * @var ?array<PreviewOrderResponseOrderInputOtcItemsItem> $otcItems
     */
    #[JsonProperty('otcItems'), ArrayType([PreviewOrderResponseOrderInputOtcItemsItem::class])]
    public ?array $otcItems;

    /**
     * @var string $practiceId
     */
    #[JsonProperty('practiceId')]
    public string $practiceId;

    /**
     * @var ?string $userId
     */
    #[JsonProperty('userId')]
    public ?string $userId;

    /**
     * @var ?PreviewOrderResponseOrderInputPrescriber $prescriber
     */
    #[JsonProperty('prescriber')]
    public ?PreviewOrderResponseOrderInputPrescriber $prescriber;

    /**
     * @var ?string $shippingAddressId
     */
    #[JsonProperty('shippingAddressId')]
    public ?string $shippingAddressId;

    /**
     * @var ?string $externalOrderId
     */
    #[JsonProperty('externalOrderId')]
    public ?string $externalOrderId;

    /**
     * @var array<PreviewOrderResponseOrderInputPrescriptionsItem> $prescriptions
     */
    #[JsonProperty('prescriptions'), ArrayType([PreviewOrderResponseOrderInputPrescriptionsItem::class])]
    public array $prescriptions;

    /**
     * @var ?string $patientId
     */
    #[JsonProperty('patientId')]
    public ?string $patientId;

    /**
     * @var ?PreviewOrderResponseOrderInputPatient $patient
     */
    #[JsonProperty('patient')]
    public ?PreviewOrderResponseOrderInputPatient $patient;

    /**
     * @param array{
     *   practiceId: string,
     *   prescriptions: array<PreviewOrderResponseOrderInputPrescriptionsItem>,
     *   otcItems?: ?array<PreviewOrderResponseOrderInputOtcItemsItem>,
     *   userId?: ?string,
     *   prescriber?: ?PreviewOrderResponseOrderInputPrescriber,
     *   shippingAddressId?: ?string,
     *   externalOrderId?: ?string,
     *   patientId?: ?string,
     *   patient?: ?PreviewOrderResponseOrderInputPatient,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->otcItems = $values['otcItems'] ?? null;
        $this->practiceId = $values['practiceId'];
        $this->userId = $values['userId'] ?? null;
        $this->prescriber = $values['prescriber'] ?? null;
        $this->shippingAddressId = $values['shippingAddressId'] ?? null;
        $this->externalOrderId = $values['externalOrderId'] ?? null;
        $this->prescriptions = $values['prescriptions'];
        $this->patientId = $values['patientId'] ?? null;
        $this->patient = $values['patient'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
