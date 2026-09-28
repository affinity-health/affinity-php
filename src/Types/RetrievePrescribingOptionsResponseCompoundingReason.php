<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class RetrievePrescribingOptionsResponseCompoundingReason extends JsonSerializableType
{
    /**
     * @var bool $required
     */
    #[JsonProperty('required')]
    public bool $required;

    /**
     * @var bool $categoryRequired
     */
    #[JsonProperty('categoryRequired')]
    public bool $categoryRequired;

    /**
     * @var value-of<RetrievePrescribingOptionsResponseCompoundingReasonContext> $context
     */
    #[JsonProperty('context')]
    public string $context;

    /**
     * @var ?string $contextPrompt
     */
    #[JsonProperty('contextPrompt')]
    public ?string $contextPrompt;

    /**
     * @var array<RetrievePrescribingOptionsResponseCompoundingReasonChoicesItem> $choices
     */
    #[JsonProperty('choices'), ArrayType([RetrievePrescribingOptionsResponseCompoundingReasonChoicesItem::class])]
    public array $choices;

    /**
     * @param array{
     *   required: bool,
     *   categoryRequired: bool,
     *   context: value-of<RetrievePrescribingOptionsResponseCompoundingReasonContext>,
     *   choices: array<RetrievePrescribingOptionsResponseCompoundingReasonChoicesItem>,
     *   contextPrompt?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->required = $values['required'];
        $this->categoryRequired = $values['categoryRequired'];
        $this->context = $values['context'];
        $this->contextPrompt = $values['contextPrompt'] ?? null;
        $this->choices = $values['choices'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
