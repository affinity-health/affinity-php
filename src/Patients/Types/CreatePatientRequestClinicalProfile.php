<?php

namespace Affinity\Patients\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;
use Affinity\Core\Types\Union;

class CreatePatientRequestClinicalProfile extends JsonSerializableType
{
    /**
     * @var array<string> $currentMedications
     */
    #[JsonProperty('currentMedications'), ArrayType(['string'])]
    public array $currentMedications;

    /**
     * @var (
     *    float
     *   |value-of<CreatePatientRequestClinicalProfileHeightInchesOne>
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
     *   |value-of<CreatePatientRequestClinicalProfileWeightPoundsOne>
     * )|null $weightPounds
     */
    #[JsonProperty('weightPounds'), Union('float', 'string', 'null')]
    public float|string|null $weightPounds;

    /**
     * @param array{
     *   currentMedications: array<string>,
     *   heightInches?: (
     *    float
     *   |value-of<CreatePatientRequestClinicalProfileHeightInchesOne>
     * )|null,
     *   reviewedAt?: ?string,
     *   weightPounds?: (
     *    float
     *   |value-of<CreatePatientRequestClinicalProfileWeightPoundsOne>
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
