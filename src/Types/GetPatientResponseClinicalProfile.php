<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;
use Affinity\Core\Types\Union;

class GetPatientResponseClinicalProfile extends JsonSerializableType
{
    /**
     * @var array<string> $currentMedications
     */
    #[JsonProperty('currentMedications'), ArrayType(['string'])]
    public array $currentMedications;

    /**
     * @var (
     *    float
     *   |value-of<GetPatientResponseClinicalProfileHeightInchesOne>
     * )|null $heightInches
     */
    #[JsonProperty('heightInches'), Union('float', 'string', 'null')]
    public float|string|null $heightInches;

    /**
     * @var ?string $reviewedAt
     */
    #[JsonProperty('reviewedAt')]
    public ?string $reviewedAt;

    /**
     * @var (
     *    float
     *   |value-of<GetPatientResponseClinicalProfileWeightPoundsOne>
     * )|null $weightPounds
     */
    #[JsonProperty('weightPounds'), Union('float', 'string', 'null')]
    public float|string|null $weightPounds;

    /**
     * @param array{
     *   currentMedications: array<string>,
     *   heightInches?: (
     *    float
     *   |value-of<GetPatientResponseClinicalProfileHeightInchesOne>
     * )|null,
     *   reviewedAt?: ?string,
     *   weightPounds?: (
     *    float
     *   |value-of<GetPatientResponseClinicalProfileWeightPoundsOne>
     * )|null,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->currentMedications = $values['currentMedications'];
        $this->heightInches = $values['heightInches'] ?? null;
        $this->reviewedAt = $values['reviewedAt'] ?? null;
        $this->weightPounds = $values['weightPounds'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
