<?php

namespace Affinity\Orders\Prescriptions\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class UpdateOrderPrescriptionRequestPrescriptionClinicalCompoundingReason extends JsonSerializableType
{
    /**
     * @var ?value-of<UpdateOrderPrescriptionRequestPrescriptionClinicalCompoundingReasonCategory> $category
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
     *   category?: ?value-of<UpdateOrderPrescriptionRequestPrescriptionClinicalCompoundingReasonCategory>,
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
