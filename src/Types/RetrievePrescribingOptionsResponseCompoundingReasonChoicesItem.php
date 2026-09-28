<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class RetrievePrescribingOptionsResponseCompoundingReasonChoicesItem extends JsonSerializableType
{
    /**
     * @var value-of<RetrievePrescribingOptionsResponseCompoundingReasonChoicesItemCategory> $category
     */
    #[JsonProperty('category')]
    public string $category;

    /**
     * @var string $label
     */
    #[JsonProperty('label')]
    public string $label;

    /**
     * @var bool $contextRequired
     */
    #[JsonProperty('contextRequired')]
    public bool $contextRequired;

    /**
     * @var ?string $contextPrompt
     */
    #[JsonProperty('contextPrompt')]
    public ?string $contextPrompt;

    /**
     * @param array{
     *   category: value-of<RetrievePrescribingOptionsResponseCompoundingReasonChoicesItemCategory>,
     *   label: string,
     *   contextRequired: bool,
     *   contextPrompt?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->category = $values['category'];
        $this->label = $values['label'];
        $this->contextRequired = $values['contextRequired'];
        $this->contextPrompt = $values['contextPrompt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
