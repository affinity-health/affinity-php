<?php

namespace Affinity\Patients\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class CreatePatientRequestEncountersItem extends JsonSerializableType
{
    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var string $occurredAt
     */
    #[JsonProperty('occurredAt')]
    public string $occurredAt;

    /**
     * @var ?string $providerName
     */
    #[JsonProperty('providerName')]
    public ?string $providerName;

    /**
     * @var string $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @param array{
     *   occurredAt: string,
     *   type: string,
     *   notes?: ?string,
     *   providerName?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->notes = $values['notes'] ?? null;
        $this->occurredAt = $values['occurredAt'];
        $this->providerName = $values['providerName'] ?? null;
        $this->type = $values['type'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
