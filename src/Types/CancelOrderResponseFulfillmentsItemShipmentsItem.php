<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class CancelOrderResponseFulfillmentsItemShipmentsItem extends JsonSerializableType
{
    /**
     * @var ?string $carrier
     */
    #[JsonProperty('carrier')]
    public ?string $carrier;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

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
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var bool $isActive
     */
    #[JsonProperty('isActive')]
    public bool $isActive;

    /**
     * @var ?string $providerStatus
     */
    #[JsonProperty('providerStatus')]
    public ?string $providerStatus;

    /**
     * @var ?string $replacedAt
     */
    #[JsonProperty('replacedAt')]
    public ?string $replacedAt;

    /**
     * @var ?string $replacesShipmentId
     */
    #[JsonProperty('replacesShipmentId')]
    public ?string $replacesShipmentId;

    /**
     * @var ?string $shippedAt
     */
    #[JsonProperty('shippedAt')]
    public ?string $shippedAt;

    /**
     * @var value-of<CancelOrderResponseFulfillmentsItemShipmentsItemSource> $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @var value-of<CancelOrderResponseFulfillmentsItemShipmentsItemStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $trackingNumber
     */
    #[JsonProperty('trackingNumber')]
    public ?string $trackingNumber;

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
     * @var ?string $voidedAt
     */
    #[JsonProperty('voidedAt')]
    public ?string $voidedAt;

    /**
     * @param array{
     *   createdAt: string,
     *   id: string,
     *   isActive: bool,
     *   source: value-of<CancelOrderResponseFulfillmentsItemShipmentsItemSource>,
     *   status: value-of<CancelOrderResponseFulfillmentsItemShipmentsItemStatus>,
     *   updatedAt: string,
     *   carrier?: ?string,
     *   deliveredAt?: ?string,
     *   estimatedDeliveryAt?: ?string,
     *   providerStatus?: ?string,
     *   replacedAt?: ?string,
     *   replacesShipmentId?: ?string,
     *   shippedAt?: ?string,
     *   trackingNumber?: ?string,
     *   trackingUrl?: ?string,
     *   voidedAt?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->carrier = $values['carrier'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->deliveredAt = $values['deliveredAt'] ?? null;
        $this->estimatedDeliveryAt = $values['estimatedDeliveryAt'] ?? null;
        $this->id = $values['id'];
        $this->isActive = $values['isActive'];
        $this->providerStatus = $values['providerStatus'] ?? null;
        $this->replacedAt = $values['replacedAt'] ?? null;
        $this->replacesShipmentId = $values['replacesShipmentId'] ?? null;
        $this->shippedAt = $values['shippedAt'] ?? null;
        $this->source = $values['source'];
        $this->status = $values['status'];
        $this->trackingNumber = $values['trackingNumber'] ?? null;
        $this->trackingUrl = $values['trackingUrl'] ?? null;
        $this->updatedAt = $values['updatedAt'];
        $this->voidedAt = $values['voidedAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
