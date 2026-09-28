<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class RetrievePrescribingOptionsResponseFormulationDefault extends JsonSerializableType
{
    /**
     * @var string $directions
     */
    #[JsonProperty('directions')]
    public string $directions;

    /**
     * @var value-of<RetrievePrescribingOptionsResponseFormulationDefaultFormat> $format
     */
    #[JsonProperty('format')]
    public string $format;

    /**
     * @var ?RetrievePrescribingOptionsResponseFormulationDefaultStructuredSig $structuredSig
     */
    #[JsonProperty('structuredSig')]
    public ?RetrievePrescribingOptionsResponseFormulationDefaultStructuredSig $structuredSig;

    /**
     * @param array{
     *   directions: string,
     *   format: value-of<RetrievePrescribingOptionsResponseFormulationDefaultFormat>,
     *   structuredSig?: ?RetrievePrescribingOptionsResponseFormulationDefaultStructuredSig,
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
