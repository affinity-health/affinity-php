<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class ReplacePatientAllergiesResponse extends JsonSerializableType
{
    /**
     * @var array<ReplacePatientAllergiesResponseAllergiesItem> $allergies
     */
    #[JsonProperty('allergies'), ArrayType([ReplacePatientAllergiesResponseAllergiesItem::class])]
    public array $allergies;

    /**
     * @var value-of<ReplacePatientAllergiesResponseReviewStatus> $reviewStatus
     */
    #[JsonProperty('reviewStatus')]
    public string $reviewStatus;

    /**
     * @param array{
     *   allergies: array<ReplacePatientAllergiesResponseAllergiesItem>,
     *   reviewStatus: value-of<ReplacePatientAllergiesResponseReviewStatus>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->allergies = $values['allergies'];
        $this->reviewStatus = $values['reviewStatus'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
