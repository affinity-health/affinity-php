<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class RetrievePrescribingOptionsResponsePresetsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $revision
     */
    #[JsonProperty('revision')]
    public string $revision;

    /**
     * @var value-of<RetrievePrescribingOptionsResponsePresetsItemSource> $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @var string $directions
     */
    #[JsonProperty('directions')]
    public string $directions;

    /**
     * @var value-of<RetrievePrescribingOptionsResponsePresetsItemFormat> $format
     */
    #[JsonProperty('format')]
    public string $format;

    /**
     * @var ?RetrievePrescribingOptionsResponsePresetsItemStructuredSig $structuredSig
     */
    #[JsonProperty('structuredSig')]
    public ?RetrievePrescribingOptionsResponsePresetsItemStructuredSig $structuredSig;

    /**
     * @var ?RetrievePrescribingOptionsResponsePresetsItemQuantity $quantity
     */
    #[JsonProperty('quantity')]
    public ?RetrievePrescribingOptionsResponsePresetsItemQuantity $quantity;

    /**
     * @var ?int $daysSupply
     */
    #[JsonProperty('daysSupply')]
    public ?int $daysSupply;

    /**
     * @var int $refills
     */
    #[JsonProperty('refills')]
    public int $refills;

    /**
     * @param array{
     *   id: string,
     *   revision: string,
     *   source: value-of<RetrievePrescribingOptionsResponsePresetsItemSource>,
     *   directions: string,
     *   format: value-of<RetrievePrescribingOptionsResponsePresetsItemFormat>,
     *   refills: int,
     *   structuredSig?: ?RetrievePrescribingOptionsResponsePresetsItemStructuredSig,
     *   quantity?: ?RetrievePrescribingOptionsResponsePresetsItemQuantity,
     *   daysSupply?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->revision = $values['revision'];
        $this->source = $values['source'];
        $this->directions = $values['directions'];
        $this->format = $values['format'];
        $this->structuredSig = $values['structuredSig'] ?? null;
        $this->quantity = $values['quantity'] ?? null;
        $this->daysSupply = $values['daysSupply'] ?? null;
        $this->refills = $values['refills'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
