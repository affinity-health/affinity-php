<?php

namespace Affinity\Orders\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class PreviewOrderRequestPrescriptionsItemOverrides extends JsonSerializableType
{
    /**
     * @var ?PreviewOrderRequestPrescriptionsItemOverridesSig $sig
     */
    #[JsonProperty('sig')]
    public ?PreviewOrderRequestPrescriptionsItemOverridesSig $sig;

    /**
     * @var ?PreviewOrderRequestPrescriptionsItemOverridesQuantity $quantity
     */
    #[JsonProperty('quantity')]
    public ?PreviewOrderRequestPrescriptionsItemOverridesQuantity $quantity;

    /**
     * @var ?int $daysSupply
     */
    #[JsonProperty('daysSupply')]
    public ?int $daysSupply;

    /**
     * @var ?int $refills
     */
    #[JsonProperty('refills')]
    public ?int $refills;

    /**
     * @var ?PreviewOrderRequestPrescriptionsItemOverridesClinical $clinical
     */
    #[JsonProperty('clinical')]
    public ?PreviewOrderRequestPrescriptionsItemOverridesClinical $clinical;

    /**
     * @var ?PreviewOrderRequestPrescriptionsItemOverridesDispensing $dispensing
     */
    #[JsonProperty('dispensing')]
    public ?PreviewOrderRequestPrescriptionsItemOverridesDispensing $dispensing;

    /**
     * @param array{
     *   sig?: ?PreviewOrderRequestPrescriptionsItemOverridesSig,
     *   quantity?: ?PreviewOrderRequestPrescriptionsItemOverridesQuantity,
     *   daysSupply?: ?int,
     *   refills?: ?int,
     *   clinical?: ?PreviewOrderRequestPrescriptionsItemOverridesClinical,
     *   dispensing?: ?PreviewOrderRequestPrescriptionsItemOverridesDispensing,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->sig = $values['sig'] ?? null;
        $this->quantity = $values['quantity'] ?? null;
        $this->daysSupply = $values['daysSupply'] ?? null;
        $this->refills = $values['refills'] ?? null;
        $this->clinical = $values['clinical'] ?? null;
        $this->dispensing = $values['dispensing'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
