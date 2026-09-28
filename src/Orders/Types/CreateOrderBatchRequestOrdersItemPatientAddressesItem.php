<?php

namespace Affinity\Orders\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class CreateOrderBatchRequestOrdersItemPatientAddressesItem extends JsonSerializableType
{
    /**
     * @var ?string $id
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var CreateOrderBatchRequestOrdersItemPatientAddressesItemAddress $address
     */
    #[JsonProperty('address')]
    public CreateOrderBatchRequestOrdersItemPatientAddressesItemAddress $address;

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
     * @param array{
     *   address: CreateOrderBatchRequestOrdersItemPatientAddressesItemAddress,
     *   label: string,
     *   preferredShipping: bool,
     *   id?: ?string,
     *   recipientName?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'] ?? null;
        $this->address = $values['address'];
        $this->label = $values['label'];
        $this->preferredShipping = $values['preferredShipping'];
        $this->recipientName = $values['recipientName'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
