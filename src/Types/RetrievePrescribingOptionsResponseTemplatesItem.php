<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class RetrievePrescribingOptionsResponseTemplatesItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var RetrievePrescribingOptionsResponseTemplatesItemInitial $initial
     */
    #[JsonProperty('initial')]
    public RetrievePrescribingOptionsResponseTemplatesItemInitial $initial;

    /**
     * @var string $label
     */
    #[JsonProperty('label')]
    public string $label;

    /**
     * @var string $preview
     */
    #[JsonProperty('preview')]
    public string $preview;

    /**
     * @var string $revision
     */
    #[JsonProperty('revision')]
    public string $revision;

    /**
     * @param array{
     *   id: string,
     *   initial: RetrievePrescribingOptionsResponseTemplatesItemInitial,
     *   label: string,
     *   preview: string,
     *   revision: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->initial = $values['initial'];
        $this->label = $values['label'];
        $this->preview = $values['preview'];
        $this->revision = $values['revision'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
