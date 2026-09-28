<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class ListPatientsResponseDataItemAddressesItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ListPatientsResponseDataItemAddressesItemAddress $address
     */
    #[JsonProperty('address')]
    public ListPatientsResponseDataItemAddressesItemAddress $address;

    /**
     * @var string $label
     */
    #[JsonProperty('label')]
    public string $label;

    /**
     * @var bool $preferredShipping
     */
    #[JsonProperty('preferredShipping')]
    public bool $preferredShipping;

    /**
     * @var ?string $recipientName
     */
    #[JsonProperty('recipientName')]
    public ?string $recipientName;

    /**
     * @var ?string $archivedAt
     */
    #[JsonProperty('archivedAt')]
    public ?string $archivedAt;

    /**
     * @param array{
     *   id: string,
     *   address: ListPatientsResponseDataItemAddressesItemAddress,
     *   label: string,
     *   preferredShipping: bool,
     *   recipientName?: ?string,
     *   archivedAt?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->address = $values['address'];
        $this->label = $values['label'];
        $this->preferredShipping = $values['preferredShipping'];
        $this->recipientName = $values['recipientName'] ?? null;
        $this->archivedAt = $values['archivedAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
