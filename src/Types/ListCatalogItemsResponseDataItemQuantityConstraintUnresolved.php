<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class ListCatalogItemsResponseDataItemQuantityConstraintUnresolved extends JsonSerializableType
{
    /**
     * @var string $sourceText
     */
    #[JsonProperty('sourceText')]
    public string $sourceText;

    /**
     * @param array{
     *   sourceText: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->sourceText = $values['sourceText'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
