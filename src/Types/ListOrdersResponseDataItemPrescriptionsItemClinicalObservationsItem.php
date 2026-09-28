<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\Union;

class ListOrdersResponseDataItemPrescriptionsItemClinicalObservationsItem extends JsonSerializableType
{
    /**
     * @var ?string $code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var string $display
     */
    #[JsonProperty('display')]
    public string $display;

    /**
     * @var (
     *    float
     *   |value-of<ListOrdersResponseDataItemPrescriptionsItemClinicalObservationsItemValueOne>
     * ) $value
     */
    #[JsonProperty('value'), Union('float', 'string')]
    public float|string $value;

    /**
     * @var string $unit
     */
    #[JsonProperty('unit')]
    public string $unit;

    /**
     * @param array{
     *   display: string,
     *   value: (
     *    float
     *   |value-of<ListOrdersResponseDataItemPrescriptionsItemClinicalObservationsItemValueOne>
     * ),
     *   unit: string,
     *   code?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'] ?? null;
        $this->display = $values['display'];
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
