<?php

namespace Affinity\Orders\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class PreviewOrderRequestPrescriptionsItemOverridesSigStructured extends JsonSerializableType
{
    /**
     * @var PreviewOrderRequestPrescriptionsItemOverridesSigStructuredFields $fields
     */
    #[JsonProperty('fields')]
    public PreviewOrderRequestPrescriptionsItemOverridesSigStructuredFields $fields;

    /**
     * @param array{
     *   fields: PreviewOrderRequestPrescriptionsItemOverridesSigStructuredFields,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fields = $values['fields'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
