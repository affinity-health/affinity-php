<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class GetPatientResponseProgramsItem extends JsonSerializableType
{
    /**
     * @var ?string $endedAt
     */
    #[JsonProperty('endedAt')]
    public ?string $endedAt;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $startedAt
     */
    #[JsonProperty('startedAt')]
    public string $startedAt;

    /**
     * @var value-of<GetPatientResponseProgramsItemStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @param array{
     *   name: string,
     *   startedAt: string,
     *   status: value-of<GetPatientResponseProgramsItemStatus>,
     *   endedAt?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->endedAt = $values['endedAt'] ?? null;
        $this->name = $values['name'];
        $this->startedAt = $values['startedAt'];
        $this->status = $values['status'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
