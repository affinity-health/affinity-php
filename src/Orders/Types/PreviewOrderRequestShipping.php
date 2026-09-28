<?php

namespace Affinity\Orders\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class PreviewOrderRequestShipping extends JsonSerializableType
{
    /**
     * @var ?value-of<PreviewOrderRequestShippingSelection> $selection
     */
    #[JsonProperty('selection')]
    public ?string $selection;

    /**
     * @param array{
     *   selection?: ?value-of<PreviewOrderRequestShippingSelection>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->selection = $values['selection'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
