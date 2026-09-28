<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class RetrievePrescribingOptionsResponseDefault extends JsonSerializableType
{
    /**
     * @var string $directions
     */
    #[JsonProperty('directions')]
    public string $directions;

    /**
     * @var value-of<RetrievePrescribingOptionsResponseDefaultFormat> $format
     */
    #[JsonProperty('format')]
    public string $format;

    /**
     * @var value-of<RetrievePrescribingOptionsResponseDefaultSource> $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @var ?RetrievePrescribingOptionsResponseDefaultStructuredSig $structuredSig
     */
    #[JsonProperty('structuredSig')]
    public ?RetrievePrescribingOptionsResponseDefaultStructuredSig $structuredSig;

    /**
     * @param array{
     *   directions: string,
     *   format: value-of<RetrievePrescribingOptionsResponseDefaultFormat>,
     *   source: value-of<RetrievePrescribingOptionsResponseDefaultSource>,
     *   structuredSig?: ?RetrievePrescribingOptionsResponseDefaultStructuredSig,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->directions = $values['directions'];
        $this->format = $values['format'];
        $this->source = $values['source'];
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
