<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class GetAccountResponseAccount extends JsonSerializableType
{
    /**
     * @var array<string> $allowedReturnUrls
     */
    #[JsonProperty('allowedReturnUrls'), ArrayType(['string'])]
    public array $allowedReturnUrls;

    /**
     * @var string $displayName
     */
    #[JsonProperty('displayName')]
    public string $displayName;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var value-of<GetAccountResponseAccountObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var string $slug
     */
    #[JsonProperty('slug')]
    public string $slug;

    /**
     * @var value-of<GetAccountResponseAccountStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $supportEmail
     */
    #[JsonProperty('supportEmail')]
    public ?string $supportEmail;

    /**
     * @var ?string $websiteUrl
     */
    #[JsonProperty('websiteUrl')]
    public ?string $websiteUrl;

    /**
     * @param array{
     *   allowedReturnUrls: array<string>,
     *   displayName: string,
     *   id: string,
     *   object: value-of<GetAccountResponseAccountObject>,
     *   slug: string,
     *   status: value-of<GetAccountResponseAccountStatus>,
     *   supportEmail?: ?string,
     *   websiteUrl?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->allowedReturnUrls = $values['allowedReturnUrls'];
        $this->displayName = $values['displayName'];
        $this->id = $values['id'];
        $this->object = $values['object'];
        $this->slug = $values['slug'];
        $this->status = $values['status'];
        $this->supportEmail = $values['supportEmail'] ?? null;
        $this->websiteUrl = $values['websiteUrl'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
