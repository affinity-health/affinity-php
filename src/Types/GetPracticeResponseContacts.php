<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class GetPracticeResponseContacts extends JsonSerializableType
{
    /**
     * @var ?GetPracticeResponseContactsCompliance $compliance
     */
    #[JsonProperty('compliance')]
    public ?GetPracticeResponseContactsCompliance $compliance;

    /**
     * @var ?GetPracticeResponseContactsPrimary $primary
     */
    #[JsonProperty('primary')]
    public ?GetPracticeResponseContactsPrimary $primary;

    /**
     * @param array{
     *   compliance?: ?GetPracticeResponseContactsCompliance,
     *   primary?: ?GetPracticeResponseContactsPrimary,
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
