<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class UpdatePracticeResponseContacts extends JsonSerializableType
{
    /**
     * @var ?UpdatePracticeResponseContactsCompliance $compliance
     */
    #[JsonProperty('compliance')]
    public ?UpdatePracticeResponseContactsCompliance $compliance;

    /**
     * @var ?UpdatePracticeResponseContactsPrimary $primary
     */
    #[JsonProperty('primary')]
    public ?UpdatePracticeResponseContactsPrimary $primary;

    /**
     * @param array{
     *   compliance?: ?UpdatePracticeResponseContactsCompliance,
     *   primary?: ?UpdatePracticeResponseContactsPrimary,
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
