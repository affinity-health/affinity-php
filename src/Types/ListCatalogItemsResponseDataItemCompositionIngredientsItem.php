<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class ListCatalogItemsResponseDataItemCompositionIngredientsItem extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var value-of<ListCatalogItemsResponseDataItemCompositionIngredientsItemRole> $role
     */
    #[JsonProperty('role')]
    public string $role;

    /**
     * @var ?ListCatalogItemsResponseDataItemCompositionIngredientsItemBasisOfStrengthSubstance $basisOfStrengthSubstance
     */
    #[JsonProperty('basisOfStrengthSubstance')]
    public ?ListCatalogItemsResponseDataItemCompositionIngredientsItemBasisOfStrengthSubstance $basisOfStrengthSubstance;

    /**
     * @var ListCatalogItemsResponseDataItemCompositionIngredientsItemStrength $strength
     */
    #[JsonProperty('strength')]
    public ListCatalogItemsResponseDataItemCompositionIngredientsItemStrength $strength;

    /**
     * @param array{
     *   name: string,
     *   role: value-of<ListCatalogItemsResponseDataItemCompositionIngredientsItemRole>,
     *   strength: ListCatalogItemsResponseDataItemCompositionIngredientsItemStrength,
     *   basisOfStrengthSubstance?: ?ListCatalogItemsResponseDataItemCompositionIngredientsItemBasisOfStrengthSubstance,
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
