<?php

namespace Affinity\Patients\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class ReplacePatientAllergiesRequestAllergiesItem extends JsonSerializableType
{
    /**
     * @var value-of<ReplacePatientAllergiesRequestAllergiesItemCategory> $category
     */
    #[JsonProperty('category')]
    public string $category;

    /**
     * @var ?string $code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?value-of<ReplacePatientAllergiesRequestAllergiesItemCodeSystem> $codeSystem
     */
    #[JsonProperty('codeSystem')]
    public ?string $codeSystem;

    /**
     * @var array<ReplacePatientAllergiesRequestAllergiesItemReactionsItem> $reactions
     */
    #[JsonProperty('reactions'), ArrayType([ReplacePatientAllergiesRequestAllergiesItemReactionsItem::class])]
    public array $reactions;

    /**
     * @var ?value-of<ReplacePatientAllergiesRequestAllergiesItemSeverity> $severity
     */
    #[JsonProperty('severity')]
    public ?string $severity;

    /**
     * @var value-of<ReplacePatientAllergiesRequestAllergiesItemSource> $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @var string $substance
     */
    #[JsonProperty('substance')]
    public string $substance;

    /**
     * @var ?value-of<ReplacePatientAllergiesRequestAllergiesItemType> $type
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var value-of<ReplacePatientAllergiesRequestAllergiesItemVerificationStatus> $verificationStatus
     */
    #[JsonProperty('verificationStatus')]
    public string $verificationStatus;

    /**
     * @param array{
     *   category: value-of<ReplacePatientAllergiesRequestAllergiesItemCategory>,
     *   reactions: array<ReplacePatientAllergiesRequestAllergiesItemReactionsItem>,
     *   source: value-of<ReplacePatientAllergiesRequestAllergiesItemSource>,
     *   substance: string,
     *   verificationStatus: value-of<ReplacePatientAllergiesRequestAllergiesItemVerificationStatus>,
     *   code?: ?string,
     *   codeSystem?: ?value-of<ReplacePatientAllergiesRequestAllergiesItemCodeSystem>,
     *   severity?: ?value-of<ReplacePatientAllergiesRequestAllergiesItemSeverity>,
     *   type?: ?value-of<ReplacePatientAllergiesRequestAllergiesItemType>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->category = $values['category'];
        $this->code = $values['code'] ?? null;
        $this->codeSystem = $values['codeSystem'] ?? null;
        $this->reactions = $values['reactions'];
        $this->severity = $values['severity'] ?? null;
        $this->source = $values['source'];
        $this->substance = $values['substance'];
        $this->type = $values['type'] ?? null;
        $this->verificationStatus = $values['verificationStatus'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
