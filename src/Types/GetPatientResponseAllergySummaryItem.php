<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class GetPatientResponseAllergySummaryItem extends JsonSerializableType
{
    /**
     * @var ?string $reaction
     */
    #[JsonProperty('reaction')]
    public ?string $reaction;

    /**
     * @var string $substance
     */
    #[JsonProperty('substance')]
    public string $substance;

    /**
     * @param array{
     *   substance: string,
     *   reaction?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->reaction = $values['reaction'] ?? null;
        $this->substance = $values['substance'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
