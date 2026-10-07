<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class RetrievePrescribingOptionsResponseCatalogCatalogDetailsPackageComponentsItem extends JsonSerializableType
{
    /**
     * @var string $container
     */
    #[JsonProperty('container')]
    public string $container;

    /**
     * @var int $containerCount
     */
    #[JsonProperty('containerCount')]
    public int $containerCount;

    /**
     * @var RetrievePrescribingOptionsResponseCatalogCatalogDetailsPackageComponentsItemContentsPerContainer $contentsPerContainer
     */
    #[JsonProperty('contentsPerContainer')]
    public RetrievePrescribingOptionsResponseCatalogCatalogDetailsPackageComponentsItemContentsPerContainer $contentsPerContainer;

    /**
     * @param array{
     *   container: string,
     *   containerCount: int,
     *   contentsPerContainer: RetrievePrescribingOptionsResponseCatalogCatalogDetailsPackageComponentsItemContentsPerContainer,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->container = $values['container'];
        $this->containerCount = $values['containerCount'];
        $this->contentsPerContainer = $values['contentsPerContainer'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
