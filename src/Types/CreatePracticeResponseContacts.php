<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class CreatePracticeResponseContacts extends JsonSerializableType
{
    /**
     * @var ?CreatePracticeResponseContactsCompliance $compliance
     */
    #[JsonProperty('compliance')]
    public ?CreatePracticeResponseContactsCompliance $compliance;

    /**
     * @var ?CreatePracticeResponseContactsPrimary $primary
     */
    #[JsonProperty('primary')]
    public ?CreatePracticeResponseContactsPrimary $primary;

    /**
     * @param array{
     *   compliance?: ?CreatePracticeResponseContactsCompliance,
     *   primary?: ?CreatePracticeResponseContactsPrimary,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->compliance = $values['compliance'] ?? null;
        $this->primary = $values['primary'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
