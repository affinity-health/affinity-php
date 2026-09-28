<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class ListOrdersResponseDataItemPrescriptionsItemDispensing extends JsonSerializableType
{
    /**
     * @var bool $dispenseUponAcceptance
     */
    #[JsonProperty('dispenseUponAcceptance')]
    public bool $dispenseUponAcceptance;

    /**
     * @var bool $substitutionPermitted
     */
    #[JsonProperty('substitutionPermitted')]
    public bool $substitutionPermitted;

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
     * @var ?string $shippingOptionId
     */
    #[JsonProperty('shippingOptionId')]
    public ?string $shippingOptionId;

    /**
     * @var ?int $shippingAmountCents
     */
    #[JsonProperty('shippingAmountCents')]
    public ?int $shippingAmountCents;

    /**
     * @var ?value-of<ListOrdersResponseDataItemPrescriptionsItemDispensingShippingDestinationType> $shippingDestinationType
     */
    #[JsonProperty('shippingDestinationType')]
    public ?string $shippingDestinationType;

    /**
     * @param array{
     *   dispenseUponAcceptance: bool,
     *   substitutionPermitted: bool,
     *   pharmacyNotes?: ?string,
     *   requestedFillDate?: ?string,
     *   shippingOptionId?: ?string,
     *   shippingAmountCents?: ?int,
     *   shippingDestinationType?: ?value-of<ListOrdersResponseDataItemPrescriptionsItemDispensingShippingDestinationType>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->dispenseUponAcceptance = $values['dispenseUponAcceptance'];
        $this->substitutionPermitted = $values['substitutionPermitted'];
        $this->pharmacyNotes = $values['pharmacyNotes'] ?? null;
        $this->requestedFillDate = $values['requestedFillDate'] ?? null;
        $this->shippingOptionId = $values['shippingOptionId'] ?? null;
        $this->shippingAmountCents = $values['shippingAmountCents'] ?? null;
        $this->shippingDestinationType = $values['shippingDestinationType'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
