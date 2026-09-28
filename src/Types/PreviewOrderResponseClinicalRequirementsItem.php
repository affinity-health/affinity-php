<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class PreviewOrderResponseClinicalRequirementsItem extends JsonSerializableType
{
    /**
     * @var string $field
     */
    #[JsonProperty('field')]
    public string $field;

    /**
     * @var string $label
     */
    #[JsonProperty('label')]
    public string $label;

    /**
     * @var value-of<PreviewOrderResponseClinicalRequirementsItemType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var bool $required
     */
    #[JsonProperty('required')]
    public bool $required;

    /**
     * @var value-of<PreviewOrderResponseClinicalRequirementsItemStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @param array{
     *   field: string,
     *   label: string,
     *   type: value-of<PreviewOrderResponseClinicalRequirementsItemType>,
     *   required: bool,
     *   status: value-of<PreviewOrderResponseClinicalRequirementsItemStatus>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->field = $values['field'];
        $this->label = $values['label'];
        $this->type = $values['type'];
        $this->required = $values['required'];
        $this->status = $values['status'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
