<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class ListCatalogItemsResponseDataItemQuantityConstraintRange extends JsonSerializableType
{
    /**
     * @var string $unit
     */
    #[JsonProperty('unit')]
    public string $unit;

    /**
     * @var ?string $minimum
     */
    #[JsonProperty('minimum')]
    public ?string $minimum;

    /**
     * @var ?string $maximum
     */
    #[JsonProperty('maximum')]
    public ?string $maximum;

    /**
     * @var ?string $increment
     */
    #[JsonProperty('increment')]
    public ?string $increment;

    /**
     * @param array{
     *   unit: string,
     *   minimum?: ?string,
     *   maximum?: ?string,
     *   increment?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->unit = $values['unit'];
        $this->minimum = $values['minimum'] ?? null;
        $this->maximum = $values['maximum'] ?? null;
        $this->increment = $values['increment'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
