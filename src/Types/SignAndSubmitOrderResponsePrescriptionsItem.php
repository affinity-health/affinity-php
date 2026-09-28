<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class SignAndSubmitOrderResponsePrescriptionsItem extends JsonSerializableType
{
    /**
     * @var string $prescriptionId
     */
    #[JsonProperty('prescriptionId')]
    public string $prescriptionId;

    /**
     * @var value-of<SignAndSubmitOrderResponsePrescriptionsItemStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $fulfillmentOrderId
     */
    #[JsonProperty('fulfillmentOrderId')]
    public ?string $fulfillmentOrderId;

    /**
     * @var ?SignAndSubmitOrderResponsePrescriptionsItemError $error
     */
    #[JsonProperty('error')]
    public ?SignAndSubmitOrderResponsePrescriptionsItemError $error;

    /**
     * @param array{
     *   prescriptionId: string,
     *   status: value-of<SignAndSubmitOrderResponsePrescriptionsItemStatus>,
     *   fulfillmentOrderId?: ?string,
     *   error?: ?SignAndSubmitOrderResponsePrescriptionsItemError,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->prescriptionId = $values['prescriptionId'];
        $this->status = $values['status'];
        $this->fulfillmentOrderId = $values['fulfillmentOrderId'] ?? null;
        $this->error = $values['error'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
