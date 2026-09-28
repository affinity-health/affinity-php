<?php

namespace Affinity\Orders\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Orders\Types\PreviewOrderRequestOtcItemsItem;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;
use Affinity\Orders\Types\PreviewOrderRequestPatient;
use Affinity\Orders\Types\PreviewOrderRequestPrescriber;
use Affinity\Orders\Types\PreviewOrderRequestPrescriptionsItem;
use Affinity\Orders\Types\PreviewOrderRequestShipping;

class PreviewOrderRequest extends JsonSerializableType
{
    /**
     * @var ?array<PreviewOrderRequestOtcItemsItem> $otcItems
     */
    #[JsonProperty('otcItems'), ArrayType([PreviewOrderRequestOtcItemsItem::class])]
    public ?array $otcItems;

    /**
     * @var string $practiceId
     */
    #[JsonProperty('practiceId')]
    public string $practiceId;

    /**
     * @var ?string $patientId
     */
    #[JsonProperty('patientId')]
    public ?string $patientId;

    /**
     * @var ?string $patientExternalId
     */
    #[JsonProperty('patientExternalId')]
    public ?string $patientExternalId;

    /**
     * @var ?PreviewOrderRequestPatient $patient
     */
    #[JsonProperty('patient')]
    public ?PreviewOrderRequestPatient $patient;

    /**
     * @var ?string $userId
     */
    #[JsonProperty('userId')]
    public ?string $userId;

    /**
     * @var ?PreviewOrderRequestPrescriber $prescriber
     */
    #[JsonProperty('prescriber')]
    public ?PreviewOrderRequestPrescriber $prescriber;

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
     * @var array<PreviewOrderRequestPrescriptionsItem> $prescriptions
     */
    #[JsonProperty('prescriptions'), ArrayType([PreviewOrderRequestPrescriptionsItem::class])]
    public array $prescriptions;

    /**
     * @var ?PreviewOrderRequestShipping $shipping
     */
    #[JsonProperty('shipping')]
    public ?PreviewOrderRequestShipping $shipping;

    /**
     * @param array{
     *   practiceId: string,
     *   prescriptions: array<PreviewOrderRequestPrescriptionsItem>,
     *   otcItems?: ?array<PreviewOrderRequestOtcItemsItem>,
     *   patientId?: ?string,
     *   patientExternalId?: ?string,
     *   patient?: ?PreviewOrderRequestPatient,
     *   userId?: ?string,
     *   prescriber?: ?PreviewOrderRequestPrescriber,
     *   shippingAddressId?: ?string,
     *   externalOrderId?: ?string,
     *   shipping?: ?PreviewOrderRequestShipping,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->otcItems = $values['otcItems'] ?? null;
        $this->practiceId = $values['practiceId'];
        $this->patientId = $values['patientId'] ?? null;
        $this->patientExternalId = $values['patientExternalId'] ?? null;
        $this->patient = $values['patient'] ?? null;
        $this->userId = $values['userId'] ?? null;
        $this->prescriber = $values['prescriber'] ?? null;
        $this->shippingAddressId = $values['shippingAddressId'] ?? null;
        $this->externalOrderId = $values['externalOrderId'] ?? null;
        $this->prescriptions = $values['prescriptions'];
        $this->shipping = $values['shipping'] ?? null;
    }
}
