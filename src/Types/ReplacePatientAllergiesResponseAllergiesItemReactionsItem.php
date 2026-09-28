<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class ReplacePatientAllergiesResponseAllergiesItemReactionsItem extends JsonSerializableType
{
    /**
     * @var ?string $code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?value-of<ReplacePatientAllergiesResponseAllergiesItemReactionsItemCodeSystem> $codeSystem
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
     *   codeSystem?: ?value-of<ReplacePatientAllergiesResponseAllergiesItemReactionsItemCodeSystem>,
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
