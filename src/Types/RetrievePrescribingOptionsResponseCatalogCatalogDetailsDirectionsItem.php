<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class RetrievePrescribingOptionsResponseCatalogCatalogDetailsDirectionsItem extends JsonSerializableType
{
    /**
     * @var value-of<RetrievePrescribingOptionsResponseCatalogCatalogDetailsDirectionsItemKind> $kind
     */
    #[JsonProperty('kind')]
    public string $kind;

    /**
     * @var string $text
     */
    #[JsonProperty('text')]
    public string $text;

    /**
     * @param array{
     *   kind: value-of<RetrievePrescribingOptionsResponseCatalogCatalogDetailsDirectionsItemKind>,
     *   text: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->kind = $values['kind'];
        $this->text = $values['text'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
