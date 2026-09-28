<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\Union;
use Affinity\Core\Types\ArrayType;

class RetrievePrescribingOptionsResponseCatalogMedicationGroup extends JsonSerializableType
{
    /**
     * @var (
     *    float
     *   |value-of<RetrievePrescribingOptionsResponseCatalogMedicationGroupOfferCountOne>
     * ) $offerCount
     */
    #[JsonProperty('offerCount'), Union('float', 'string')]
    public float|string $offerCount;

    /**
     * @var (
     *    float
     *   |value-of<RetrievePrescribingOptionsResponseCatalogMedicationGroupPharmacyCountOne>
     * ) $pharmacyCount
     */
    #[JsonProperty('pharmacyCount'), Union('float', 'string')]
    public float|string $pharmacyCount;

    /**
     * @var array<string> $strengths
     */
    #[JsonProperty('strengths'), ArrayType(['string'])]
    public array $strengths;

    /**
     * @param array{
     *   offerCount: (
     *    float
     *   |value-of<RetrievePrescribingOptionsResponseCatalogMedicationGroupOfferCountOne>
     * ),
     *   pharmacyCount: (
     *    float
     *   |value-of<RetrievePrescribingOptionsResponseCatalogMedicationGroupPharmacyCountOne>
     * ),
     *   strengths: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->offerCount = $values['offerCount'];
        $this->pharmacyCount = $values['pharmacyCount'];
        $this->strengths = $values['strengths'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
