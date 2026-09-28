<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\Union;

class ListPharmaciesResponseDataItemProfile extends JsonSerializableType
{
    /**
     * @var string $description
     */
    #[JsonProperty('description')]
    public string $description;

    /**
     * @var string $effectiveAt
     */
    #[JsonProperty('effectiveAt')]
    public string $effectiveAt;

    /**
     * @var ?int $monthlyPrescriptionVolume
     */
    #[JsonProperty('monthlyPrescriptionVolume')]
    public ?int $monthlyPrescriptionVolume;

    /**
     * @var (
     *    float
     *   |value-of<ListPharmaciesResponseDataItemProfileRatingOne>
     * )|null $rating
     */
    #[JsonProperty('rating'), Union('float', 'string', 'null')]
    public float|string|null $rating;

    /**
     * @var ?string $ratingBasis
     */
    #[JsonProperty('ratingBasis')]
    public ?string $ratingBasis;

    /**
     * @var ?int $ratingReviewCount
     */
    #[JsonProperty('ratingReviewCount')]
    public ?int $ratingReviewCount;

    /**
     * @var ?int $recommendedRank
     */
    #[JsonProperty('recommendedRank')]
    public ?int $recommendedRank;

    /**
     * @param array{
     *   description: string,
     *   effectiveAt: string,
     *   monthlyPrescriptionVolume?: ?int,
     *   rating?: (
     *    float
     *   |value-of<ListPharmaciesResponseDataItemProfileRatingOne>
     * )|null,
     *   ratingBasis?: ?string,
     *   ratingReviewCount?: ?int,
     *   recommendedRank?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->description = $values['description'];
        $this->effectiveAt = $values['effectiveAt'];
        $this->monthlyPrescriptionVolume = $values['monthlyPrescriptionVolume'] ?? null;
        $this->rating = $values['rating'] ?? null;
        $this->ratingBasis = $values['ratingBasis'] ?? null;
        $this->ratingReviewCount = $values['ratingReviewCount'] ?? null;
        $this->recommendedRank = $values['recommendedRank'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
