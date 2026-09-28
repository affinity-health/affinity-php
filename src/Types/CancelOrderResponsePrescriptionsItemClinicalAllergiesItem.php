<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class CancelOrderResponsePrescriptionsItemClinicalAllergiesItem extends JsonSerializableType
{
    /**
     * @var ?string $code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?string $codeSystem
     */
    #[JsonProperty('codeSystem')]
    public ?string $codeSystem;

    /**
     * @var string $display
     */
    #[JsonProperty('display')]
    public string $display;

    /**
     * @var ?string $source
     */
    #[JsonProperty('source')]
    public ?string $source;

    /**
     * @var ?string $category
     */
    #[JsonProperty('category')]
    public ?string $category;

    /**
     * @var ?string $severity
     */
    #[JsonProperty('severity')]
    public ?string $severity;

    /**
     * @var ?string $type
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?string $verificationStatus
     */
    #[JsonProperty('verificationStatus')]
    public ?string $verificationStatus;

    /**
     * @var ?array<CancelOrderResponsePrescriptionsItemClinicalAllergiesItemReactionsItem> $reactions
     */
    #[JsonProperty('reactions'), ArrayType([CancelOrderResponsePrescriptionsItemClinicalAllergiesItemReactionsItem::class])]
    public ?array $reactions;

    /**
     * @param array{
     *   display: string,
     *   code?: ?string,
     *   codeSystem?: ?string,
     *   source?: ?string,
     *   category?: ?string,
     *   severity?: ?string,
     *   type?: ?string,
     *   verificationStatus?: ?string,
     *   reactions?: ?array<CancelOrderResponsePrescriptionsItemClinicalAllergiesItemReactionsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'] ?? null;
        $this->codeSystem = $values['codeSystem'] ?? null;
        $this->display = $values['display'];
        $this->source = $values['source'] ?? null;
        $this->category = $values['category'] ?? null;
        $this->severity = $values['severity'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->verificationStatus = $values['verificationStatus'] ?? null;
        $this->reactions = $values['reactions'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
