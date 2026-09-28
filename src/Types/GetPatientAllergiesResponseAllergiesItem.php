<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class GetPatientAllergiesResponseAllergiesItem extends JsonSerializableType
{
    /**
     * @var value-of<GetPatientAllergiesResponseAllergiesItemCategory> $category
     */
    #[JsonProperty('category')]
    public string $category;

    /**
     * @var ?string $code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?value-of<GetPatientAllergiesResponseAllergiesItemCodeSystem> $codeSystem
     */
    #[JsonProperty('codeSystem')]
    public ?string $codeSystem;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var array<GetPatientAllergiesResponseAllergiesItemReactionsItem> $reactions
     */
    #[JsonProperty('reactions'), ArrayType([GetPatientAllergiesResponseAllergiesItemReactionsItem::class])]
    public array $reactions;

    /**
     * @var ?value-of<GetPatientAllergiesResponseAllergiesItemSeverity> $severity
     */
    #[JsonProperty('severity')]
    public ?string $severity;

    /**
     * @var value-of<GetPatientAllergiesResponseAllergiesItemSource> $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @var string $substance
     */
    #[JsonProperty('substance')]
    public string $substance;

    /**
     * @var ?value-of<GetPatientAllergiesResponseAllergiesItemType> $type
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var value-of<GetPatientAllergiesResponseAllergiesItemVerificationStatus> $verificationStatus
     */
    #[JsonProperty('verificationStatus')]
    public string $verificationStatus;

    /**
     * @param array{
     *   category: value-of<GetPatientAllergiesResponseAllergiesItemCategory>,
     *   id: string,
     *   reactions: array<GetPatientAllergiesResponseAllergiesItemReactionsItem>,
     *   source: value-of<GetPatientAllergiesResponseAllergiesItemSource>,
     *   substance: string,
     *   verificationStatus: value-of<GetPatientAllergiesResponseAllergiesItemVerificationStatus>,
     *   code?: ?string,
     *   codeSystem?: ?value-of<GetPatientAllergiesResponseAllergiesItemCodeSystem>,
     *   severity?: ?value-of<GetPatientAllergiesResponseAllergiesItemSeverity>,
     *   type?: ?value-of<GetPatientAllergiesResponseAllergiesItemType>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->category = $values['category'];
        $this->code = $values['code'] ?? null;
        $this->codeSystem = $values['codeSystem'] ?? null;
        $this->id = $values['id'];
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
