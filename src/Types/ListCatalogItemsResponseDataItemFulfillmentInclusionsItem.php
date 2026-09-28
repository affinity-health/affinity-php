<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class ListCatalogItemsResponseDataItemFulfillmentInclusionsItem extends JsonSerializableType
{
    /**
     * @var int $amountCents
     */
    #[JsonProperty('amountCents')]
    public int $amountCents;

    /**
     * @var value-of<ListCatalogItemsResponseDataItemFulfillmentInclusionsItemKind> $kind
     */
    #[JsonProperty('kind')]
    public string $kind;

    /**
     * @var string $label
     */
    #[JsonProperty('label')]
    public string $label;

    /**
     * @var value-of<ListCatalogItemsResponseDataItemFulfillmentInclusionsItemPriceComponent> $priceComponent
     */
    #[JsonProperty('priceComponent')]
    public string $priceComponent;

    /**
     * @param array{
     *   amountCents: int,
     *   kind: value-of<ListCatalogItemsResponseDataItemFulfillmentInclusionsItemKind>,
     *   label: string,
     *   priceComponent: value-of<ListCatalogItemsResponseDataItemFulfillmentInclusionsItemPriceComponent>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->amountCents = $values['amountCents'];
        $this->kind = $values['kind'];
        $this->label = $values['label'];
        $this->priceComponent = $values['priceComponent'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
