<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class CancelOrderResponseFulfillmentsItem extends JsonSerializableType
{
    /**
     * @var ?string $carrier
     */
    #[JsonProperty('carrier')]
    public ?string $carrier;

    /**
     * @var array<CancelOrderResponseFulfillmentsItemCancellationsItem> $cancellations
     */
    #[JsonProperty('cancellations'), ArrayType([CancelOrderResponseFulfillmentsItemCancellationsItem::class])]
    public array $cancellations;

    /**
     * @var ?string $pharmacyId
     */
    #[JsonProperty('pharmacyId')]
    public ?string $pharmacyId;

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
     * @var string $prescriptionId
     */
    #[JsonProperty('prescriptionId')]
    public string $prescriptionId;

    /**
     * @var string $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $trackingNumber
     */
    #[JsonProperty('trackingNumber')]
    public ?string $trackingNumber;

    /**
     * @var ?string $trackingStatus
     */
    #[JsonProperty('trackingStatus')]
    public ?string $trackingStatus;

    /**
     * @var ?string $shippedAt
     */
    #[JsonProperty('shippedAt')]
    public ?string $shippedAt;

    /**
     * @var ?string $deliveredAt
     */
    #[JsonProperty('deliveredAt')]
    public ?string $deliveredAt;

    /**
     * @var ?string $estimatedDeliveryAt
     */
    #[JsonProperty('estimatedDeliveryAt')]
    public ?string $estimatedDeliveryAt;

    /**
     * @var array<CancelOrderResponseFulfillmentsItemExceptionsItem> $exceptions
     */
    #[JsonProperty('exceptions'), ArrayType([CancelOrderResponseFulfillmentsItemExceptionsItem::class])]
    public array $exceptions;

    /**
     * @var CancelOrderResponseFulfillmentsItemShipping $shipping
     */
    #[JsonProperty('shipping')]
    public CancelOrderResponseFulfillmentsItemShipping $shipping;

    /**
     * @var array<CancelOrderResponseFulfillmentsItemShipmentsItem> $shipments
     */
    #[JsonProperty('shipments'), ArrayType([CancelOrderResponseFulfillmentsItemShipmentsItem::class])]
    public array $shipments;

    /**
     * @var ?string $trackingUrl
     */
    #[JsonProperty('trackingUrl')]
    public ?string $trackingUrl;

    /**
     * @var string $updatedAt
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @param array{
     *   cancellations: array<CancelOrderResponseFulfillmentsItemCancellationsItem>,
     *   createdAt: string,
     *   id: string,
     *   prescriptionId: string,
     *   status: string,
     *   exceptions: array<CancelOrderResponseFulfillmentsItemExceptionsItem>,
     *   shipping: CancelOrderResponseFulfillmentsItemShipping,
     *   shipments: array<CancelOrderResponseFulfillmentsItemShipmentsItem>,
     *   updatedAt: string,
     *   carrier?: ?string,
     *   pharmacyId?: ?string,
     *   trackingNumber?: ?string,
     *   trackingStatus?: ?string,
     *   shippedAt?: ?string,
     *   deliveredAt?: ?string,
     *   estimatedDeliveryAt?: ?string,
     *   trackingUrl?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->carrier = $values['carrier'] ?? null;
        $this->cancellations = $values['cancellations'];
        $this->pharmacyId = $values['pharmacyId'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->id = $values['id'];
        $this->prescriptionId = $values['prescriptionId'];
        $this->status = $values['status'];
        $this->trackingNumber = $values['trackingNumber'] ?? null;
        $this->trackingStatus = $values['trackingStatus'] ?? null;
        $this->shippedAt = $values['shippedAt'] ?? null;
        $this->deliveredAt = $values['deliveredAt'] ?? null;
        $this->estimatedDeliveryAt = $values['estimatedDeliveryAt'] ?? null;
        $this->exceptions = $values['exceptions'];
        $this->shipping = $values['shipping'];
        $this->shipments = $values['shipments'];
        $this->trackingUrl = $values['trackingUrl'] ?? null;
        $this->updatedAt = $values['updatedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
