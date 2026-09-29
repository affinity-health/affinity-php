<?php

namespace Affinity\Orders\Batches\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;
use Affinity\Core\Types\Union;

class CreateOrderBatchRequestOrdersItemPatientClinicalProfile extends JsonSerializableType
{
    /**
     * @var array<string> $currentMedications
     */
    #[JsonProperty('currentMedications'), ArrayType(['string'])]
    public array $currentMedications;

    /**
     * @var (
     *    float
     *   |value-of<CreateOrderBatchRequestOrdersItemPatientClinicalProfileHeightInchesOne>
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
     *   |value-of<CreateOrderBatchRequestOrdersItemPatientClinicalProfileWeightPoundsOne>
     * )|null $weightPounds
     */
    #[JsonProperty('weightPounds'), Union('float', 'string', 'null')]
    public float|string|null $weightPounds;

    /**
     * @param array{
     *   currentMedications: array<string>,
     *   heightInches?: (
     *    float
     *   |value-of<CreateOrderBatchRequestOrdersItemPatientClinicalProfileHeightInchesOne>
     * )|null,
     *   reviewedAt?: ?string,
     *   weightPounds?: (
     *    float
     *   |value-of<CreateOrderBatchRequestOrdersItemPatientClinicalProfileWeightPoundsOne>
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
