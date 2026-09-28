<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class PreviewOrderResponseOrderInputPrescriptionsItemClinicalCompoundingReason extends JsonSerializableType
{
    /**
     * @var ?value-of<PreviewOrderResponseOrderInputPrescriptionsItemClinicalCompoundingReasonCategory> $category
     */
    #[JsonProperty('category')]
    public ?string $category;

    /**
     * @var ?string $context
     */
    #[JsonProperty('context')]
    public ?string $context;

    /**
     * @param array{
     *   category?: ?value-of<PreviewOrderResponseOrderInputPrescriptionsItemClinicalCompoundingReasonCategory>,
     *   context?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->category = $values['category'] ?? null;
        $this->context = $values['context'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
