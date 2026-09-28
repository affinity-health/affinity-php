<?php

namespace Affinity\Orders\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class CreateOrderRequestPrescriptionsItemDispensing extends JsonSerializableType
{
    /**
     * @var ?bool $dispenseUponAcceptance
     */
    #[JsonProperty('dispenseUponAcceptance')]
    public ?bool $dispenseUponAcceptance;

    /**
     * @var ?string $shippingOptionId
     */
    #[JsonProperty('shippingOptionId')]
    public ?string $shippingOptionId;

    /**
     * @var ?int $shippingAmountCents Reviewed customer shipping rate for the selected service. Preview supplies this value. Shared group rates must not be summed per prescription.
     */
    #[JsonProperty('shippingAmountCents')]
    public ?int $shippingAmountCents;

    /**
     * @var ?value-of<CreateOrderRequestPrescriptionsItemDispensingShippingDestinationType> $shippingDestinationType
     */
    #[JsonProperty('shippingDestinationType')]
    public ?string $shippingDestinationType;

    /**
     * @var ?string $pharmacyNotes
     */
    #[JsonProperty('pharmacyNotes')]
    public ?string $pharmacyNotes;

    /**
     * @var ?string $requestedFillDate
     */
    #[JsonProperty('requestedFillDate')]
    public ?string $requestedFillDate;

    /**
     * @var ?bool $substitutionPermitted
     */
    #[JsonProperty('substitutionPermitted')]
    public ?bool $substitutionPermitted;

    /**
     * @param array{
     *   dispenseUponAcceptance?: ?bool,
     *   shippingOptionId?: ?string,
     *   shippingAmountCents?: ?int,
     *   shippingDestinationType?: ?value-of<CreateOrderRequestPrescriptionsItemDispensingShippingDestinationType>,
     *   pharmacyNotes?: ?string,
     *   requestedFillDate?: ?string,
     *   substitutionPermitted?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->dispenseUponAcceptance = $values['dispenseUponAcceptance'] ?? null;
        $this->shippingOptionId = $values['shippingOptionId'] ?? null;
        $this->shippingAmountCents = $values['shippingAmountCents'] ?? null;
        $this->shippingDestinationType = $values['shippingDestinationType'] ?? null;
        $this->pharmacyNotes = $values['pharmacyNotes'] ?? null;
        $this->requestedFillDate = $values['requestedFillDate'] ?? null;
        $this->substitutionPermitted = $values['substitutionPermitted'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
