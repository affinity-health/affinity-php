<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class ListPracticesResponseDataItemContacts extends JsonSerializableType
{
    /**
     * @var ?ListPracticesResponseDataItemContactsCompliance $compliance
     */
    #[JsonProperty('compliance')]
    public ?ListPracticesResponseDataItemContactsCompliance $compliance;

    /**
     * @var ?ListPracticesResponseDataItemContactsPrimary $primary
     */
    #[JsonProperty('primary')]
    public ?ListPracticesResponseDataItemContactsPrimary $primary;

    /**
     * @param array{
     *   compliance?: ?ListPracticesResponseDataItemContactsCompliance,
     *   primary?: ?ListPracticesResponseDataItemContactsPrimary,
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
