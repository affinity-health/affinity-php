<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class GetPatientResponseName extends JsonSerializableType
{
    /**
     * @var string $first
     */
    #[JsonProperty('first')]
    public string $first;

    /**
     * @var string $last
     */
    #[JsonProperty('last')]
    public string $last;

    /**
     * @var ?string $middle
     */
    #[JsonProperty('middle')]
    public ?string $middle;

    /**
     * @var ?string $preferred
     */
    #[JsonProperty('preferred')]
    public ?string $preferred;

    /**
     * @param array{
     *   first: string,
     *   last: string,
     *   middle?: ?string,
     *   preferred?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->first = $values['first'];
        $this->last = $values['last'];
        $this->middle = $values['middle'] ?? null;
        $this->preferred = $values['preferred'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
