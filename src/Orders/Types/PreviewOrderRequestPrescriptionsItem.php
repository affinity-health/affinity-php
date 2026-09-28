<?php

namespace Affinity\Orders\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class PreviewOrderRequestPrescriptionsItem extends JsonSerializableType
{
    /**
     * @var string $medicationId
     */
    #[JsonProperty('medicationId')]
    public string $medicationId;

    /**
     * @var ?string $externalPrescriptionId
     */
    #[JsonProperty('externalPrescriptionId')]
    public ?string $externalPrescriptionId;

    /**
     * @var ?string $preset
     */
    #[JsonProperty('preset')]
    public ?string $preset;

    /**
     * @var ?string $expectedRevision
     */
    #[JsonProperty('expectedRevision')]
    public ?string $expectedRevision;

    /**
     * @var ?PreviewOrderRequestPrescriptionsItemOverrides $overrides
     */
    #[JsonProperty('overrides')]
    public ?PreviewOrderRequestPrescriptionsItemOverrides $overrides;

    /**
     * @param array{
     *   medicationId: string,
     *   externalPrescriptionId?: ?string,
     *   preset?: ?string,
     *   expectedRevision?: ?string,
     *   overrides?: ?PreviewOrderRequestPrescriptionsItemOverrides,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->medicationId = $values['medicationId'];
        $this->externalPrescriptionId = $values['externalPrescriptionId'] ?? null;
        $this->preset = $values['preset'] ?? null;
        $this->expectedRevision = $values['expectedRevision'] ?? null;
        $this->overrides = $values['overrides'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
