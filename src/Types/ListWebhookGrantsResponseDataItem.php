<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class ListWebhookGrantsResponseDataItem extends JsonSerializableType
{
    /**
     * @var string $id Platform account ID; use as the pagination cursor within this owner's grants.
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var value-of<ListWebhookGrantsResponseDataItemObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var string $organizationId
     */
    #[JsonProperty('organizationId')]
    public string $organizationId;

    /**
     * @var string $platformId
     */
    #[JsonProperty('platformId')]
    public string $platformId;

    /**
     * @var bool $livemode
     */
    #[JsonProperty('livemode')]
    public bool $livemode;

    /**
     * @var array<value-of<ListWebhookGrantsResponseDataItemScopesItem>> $scopes
     */
    #[JsonProperty('scopes'), ArrayType(['string'])]
    public array $scopes;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $updatedAt
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @param array{
     *   id: string,
     *   object: value-of<ListWebhookGrantsResponseDataItemObject>,
     *   organizationId: string,
     *   platformId: string,
     *   livemode: bool,
     *   scopes: array<value-of<ListWebhookGrantsResponseDataItemScopesItem>>,
     *   createdAt: string,
     *   updatedAt: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->object = $values['object'];
        $this->organizationId = $values['organizationId'];
        $this->platformId = $values['platformId'];
        $this->livemode = $values['livemode'];
        $this->scopes = $values['scopes'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
