<?php

namespace Affinity\Patients\Allergies\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class ReplacePatientAllergiesRequestAllergiesItemReactionsItem extends JsonSerializableType
{
    /**
     * @var ?string $code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?value-of<ReplacePatientAllergiesRequestAllergiesItemReactionsItemCodeSystem> $codeSystem
     */
    #[JsonProperty('codeSystem')]
    public ?string $codeSystem;

    /**
     * @var string $display
     */
    #[JsonProperty('display')]
    public string $display;

    /**
     * @param array{
     *   display: string,
     *   code?: ?string,
     *   codeSystem?: ?value-of<ReplacePatientAllergiesRequestAllergiesItemReactionsItemCodeSystem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'] ?? null;
        $this->codeSystem = $values['codeSystem'] ?? null;
        $this->display = $values['display'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
