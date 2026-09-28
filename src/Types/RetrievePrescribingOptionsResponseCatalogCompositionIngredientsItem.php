<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItem extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var value-of<RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemRole> $role
     */
    #[JsonProperty('role')]
    public string $role;

    /**
     * @var ?RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemBasisOfStrengthSubstance $basisOfStrengthSubstance
     */
    #[JsonProperty('basisOfStrengthSubstance')]
    public ?RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemBasisOfStrengthSubstance $basisOfStrengthSubstance;

    /**
     * @var RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrength $strength
     */
    #[JsonProperty('strength')]
    public RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrength $strength;

    /**
     * @param array{
     *   name: string,
     *   role: value-of<RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemRole>,
     *   strength: RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrength,
     *   basisOfStrengthSubstance?: ?RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemBasisOfStrengthSubstance,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->role = $values['role'];
        $this->basisOfStrengthSubstance = $values['basisOfStrengthSubstance'] ?? null;
        $this->strength = $values['strength'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
