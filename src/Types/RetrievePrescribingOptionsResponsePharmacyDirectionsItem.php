<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class RetrievePrescribingOptionsResponsePharmacyDirectionsItem extends JsonSerializableType
{
    /**
     * @var string $directions
     */
    #[JsonProperty('directions')]
    public string $directions;

    /**
     * @var value-of<RetrievePrescribingOptionsResponsePharmacyDirectionsItemFormat> $format
     */
    #[JsonProperty('format')]
    public string $format;

    /**
     * @var ?RetrievePrescribingOptionsResponsePharmacyDirectionsItemStructuredSig $structuredSig
     */
    #[JsonProperty('structuredSig')]
    public ?RetrievePrescribingOptionsResponsePharmacyDirectionsItemStructuredSig $structuredSig;

    /**
     * @param array{
     *   directions: string,
     *   format: value-of<RetrievePrescribingOptionsResponsePharmacyDirectionsItemFormat>,
     *   structuredSig?: ?RetrievePrescribingOptionsResponsePharmacyDirectionsItemStructuredSig,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->directions = $values['directions'];
        $this->format = $values['format'];
        $this->structuredSig = $values['structuredSig'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
