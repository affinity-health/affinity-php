<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class CancelOrderResponsePrescriptionsItemClinicalMedicationsItem extends JsonSerializableType
{
    /**
     * @var string $display
     */
    #[JsonProperty('display')]
    public string $display;

    /**
     * @var ?string $ndc
     */
    #[JsonProperty('ndc')]
    public ?string $ndc;

    /**
     * @var ?string $rxNormCui
     */
    #[JsonProperty('rxNormCui')]
    public ?string $rxNormCui;

    /**
     * @var ?string $source
     */
    #[JsonProperty('source')]
    public ?string $source;

    /**
     * @param array{
     *   display: string,
     *   ndc?: ?string,
     *   rxNormCui?: ?string,
     *   source?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->display = $values['display'];
        $this->ndc = $values['ndc'] ?? null;
        $this->rxNormCui = $values['rxNormCui'] ?? null;
        $this->source = $values['source'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
