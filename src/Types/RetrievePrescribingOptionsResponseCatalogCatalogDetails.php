<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;
use Affinity\Core\Types\Union;

class RetrievePrescribingOptionsResponseCatalogCatalogDetails extends JsonSerializableType
{
    /**
     * @var ?array<RetrievePrescribingOptionsResponseCatalogCatalogDetailsPackageComponentsItem> $packageComponents Confirmed physical containers and contents. Empty or absent means container count cannot be inferred from dispense quantity.
     */
    #[JsonProperty('packageComponents'), ArrayType([RetrievePrescribingOptionsResponseCatalogCatalogDetailsPackageComponentsItem::class])]
    public ?array $packageComponents;

    /**
     * @var array<string, (
     *    string
     *   |array<string>
     * )> $attributes
     */
    #[JsonProperty('attributes'), ArrayType(['string' => new Union('string', ['string'])])]
    public array $attributes;

    /**
     * @var array<RetrievePrescribingOptionsResponseCatalogCatalogDetailsDirectionsItem> $directions
     */
    #[JsonProperty('directions'), ArrayType([RetrievePrescribingOptionsResponseCatalogCatalogDetailsDirectionsItem::class])]
    public array $directions;

    /**
     * @param array{
     *   attributes: array<string, (
     *    string
     *   |array<string>
     * )>,
     *   directions: array<RetrievePrescribingOptionsResponseCatalogCatalogDetailsDirectionsItem>,
     *   packageComponents?: ?array<RetrievePrescribingOptionsResponseCatalogCatalogDetailsPackageComponentsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->packageComponents = $values['packageComponents'] ?? null;
        $this->attributes = $values['attributes'];
        $this->directions = $values['directions'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
