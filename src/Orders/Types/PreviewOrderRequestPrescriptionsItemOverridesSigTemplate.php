<?php

namespace Affinity\Orders\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class PreviewOrderRequestPrescriptionsItemOverridesSigTemplate extends JsonSerializableType
{
    /**
     * @var string $templateId
     */
    #[JsonProperty('templateId')]
    public string $templateId;

    /**
     * @var string $templateRevision
     */
    #[JsonProperty('templateRevision')]
    public string $templateRevision;

    /**
     * @var array<string, string> $values
     */
    #[JsonProperty('values'), ArrayType(['string' => 'string'])]
    public array $values;

    /**
     * @param array{
     *   templateId: string,
     *   templateRevision: string,
     *   values: array<string, string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->templateId = $values['templateId'];
        $this->templateRevision = $values['templateRevision'];
        $this->values = $values['values'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
