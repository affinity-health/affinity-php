<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class PreviewOrderResponsePrescriptionsItem extends JsonSerializableType
{
    /**
     * @var string $medicationId
     */
    #[JsonProperty('medicationId')]
    public string $medicationId;

    /**
     * @var string $revision
     */
    #[JsonProperty('revision')]
    public string $revision;

    /**
     * @var string $directions
     */
    #[JsonProperty('directions')]
    public string $directions;

    /**
     * @var ?PreviewOrderResponsePrescriptionsItemStructuredSig $structuredSig
     */
    #[JsonProperty('structuredSig')]
    public ?PreviewOrderResponsePrescriptionsItemStructuredSig $structuredSig;

    /**
     * @var value-of<PreviewOrderResponsePrescriptionsItemFormat> $format
     */
    #[JsonProperty('format')]
    public string $format;

    /**
     * @var ?PreviewOrderResponsePrescriptionsItemQuantity $quantity
     */
    #[JsonProperty('quantity')]
    public ?PreviewOrderResponsePrescriptionsItemQuantity $quantity;

    /**
     * @var ?int $daysSupply
     */
    #[JsonProperty('daysSupply')]
    public ?int $daysSupply;

    /**
     * @var value-of<PreviewOrderResponsePrescriptionsItemDaysSupplySource> $daysSupplySource
     */
    #[JsonProperty('daysSupplySource')]
    public string $daysSupplySource;

    /**
     * @var int $refills
     */
    #[JsonProperty('refills')]
    public int $refills;

    /**
     * @var array<PreviewOrderResponsePrescriptionsItemShippingOptionsItem> $shippingOptions
     */
    #[JsonProperty('shippingOptions'), ArrayType([PreviewOrderResponsePrescriptionsItemShippingOptionsItem::class])]
    public array $shippingOptions;

    /**
     * @var ?string $shippingOptionId
     */
    #[JsonProperty('shippingOptionId')]
    public ?string $shippingOptionId;

    /**
     * @var ?int $medicationSubtotalCents
     */
    #[JsonProperty('medicationSubtotalCents')]
    public ?int $medicationSubtotalCents;

    /**
     * @var ?int $shippingAmountCents
     */
    #[JsonProperty('shippingAmountCents')]
    public ?int $shippingAmountCents;

    /**
     * @param array{
     *   medicationId: string,
     *   revision: string,
     *   directions: string,
     *   format: value-of<PreviewOrderResponsePrescriptionsItemFormat>,
     *   daysSupplySource: value-of<PreviewOrderResponsePrescriptionsItemDaysSupplySource>,
     *   refills: int,
     *   shippingOptions: array<PreviewOrderResponsePrescriptionsItemShippingOptionsItem>,
     *   structuredSig?: ?PreviewOrderResponsePrescriptionsItemStructuredSig,
     *   quantity?: ?PreviewOrderResponsePrescriptionsItemQuantity,
     *   daysSupply?: ?int,
     *   shippingOptionId?: ?string,
     *   medicationSubtotalCents?: ?int,
     *   shippingAmountCents?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->medicationId = $values['medicationId'];
        $this->revision = $values['revision'];
        $this->directions = $values['directions'];
        $this->structuredSig = $values['structuredSig'] ?? null;
        $this->format = $values['format'];
        $this->quantity = $values['quantity'] ?? null;
        $this->daysSupply = $values['daysSupply'] ?? null;
        $this->daysSupplySource = $values['daysSupplySource'];
        $this->refills = $values['refills'];
        $this->shippingOptions = $values['shippingOptions'];
        $this->shippingOptionId = $values['shippingOptionId'] ?? null;
        $this->medicationSubtotalCents = $values['medicationSubtotalCents'] ?? null;
        $this->shippingAmountCents = $values['shippingAmountCents'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
