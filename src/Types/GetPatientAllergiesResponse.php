<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class GetPatientAllergiesResponse extends JsonSerializableType
{
    /**
     * @var array<GetPatientAllergiesResponseAllergiesItem> $allergies
     */
    #[JsonProperty('allergies'), ArrayType([GetPatientAllergiesResponseAllergiesItem::class])]
    public array $allergies;

    /**
     * @var value-of<GetPatientAllergiesResponseReviewStatus> $reviewStatus
     */
    #[JsonProperty('reviewStatus')]
    public string $reviewStatus;

    /**
     * @param array{
     *   allergies: array<GetPatientAllergiesResponseAllergiesItem>,
     *   reviewStatus: value-of<GetPatientAllergiesResponseReviewStatus>,
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
