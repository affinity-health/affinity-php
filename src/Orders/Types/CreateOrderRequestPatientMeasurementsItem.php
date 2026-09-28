<?php

namespace Affinity\Orders\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\Union;

class CreateOrderRequestPatientMeasurementsItem extends JsonSerializableType
{
    /**
     * @var (
     *    float
     *   |value-of<CreateOrderRequestPatientMeasurementsItemHeightCentimetersOne>
     * )|null $heightCentimeters
     */
    #[JsonProperty('heightCentimeters'), Union('float', 'string', 'null')]
    public float|string|null $heightCentimeters;

    /**
     * @var string $recordedAt
     */
    #[JsonProperty('recordedAt')]
    public string $recordedAt;

    /**
     * @var string $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @var (
     *    float
     *   |value-of<CreateOrderRequestPatientMeasurementsItemWeightKilogramsOne>
     * )|null $weightKilograms
     */
    #[JsonProperty('weightKilograms'), Union('float', 'string', 'null')]
    public float|string|null $weightKilograms;

    /**
     * @param array{
     *   recordedAt: string,
     *   source: string,
     *   heightCentimeters?: (
     *    float
     *   |value-of<CreateOrderRequestPatientMeasurementsItemHeightCentimetersOne>
     * )|null,
     *   weightKilograms?: (
     *    float
     *   |value-of<CreateOrderRequestPatientMeasurementsItemWeightKilogramsOne>
     * )|null,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->heightCentimeters = $values['heightCentimeters'] ?? null;
        $this->recordedAt = $values['recordedAt'];
        $this->source = $values['source'];
        $this->weightKilograms = $values['weightKilograms'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
