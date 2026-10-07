<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class ListCatalogItemsResponseDataItemCatalogDetailsPackageComponentsItemContentsPerContainer extends JsonSerializableType
{
    /**
     * @var string $value
     */
    #[JsonProperty('value')]
    public string $value;

    /**
     * @var value-of<ListCatalogItemsResponseDataItemCatalogDetailsPackageComponentsItemContentsPerContainerUnit> $unit
     */
    #[JsonProperty('unit')]
    public string $unit;

    /**
     * @param array{
     *   value: string,
     *   unit: value-of<ListCatalogItemsResponseDataItemCatalogDetailsPackageComponentsItemContentsPerContainerUnit>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->value = $values['value'];
        $this->unit = $values['unit'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
