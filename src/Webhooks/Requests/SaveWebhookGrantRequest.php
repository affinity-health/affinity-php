<?php

namespace Affinity\Webhooks\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Webhooks\Types\SaveWebhookGrantRequestScopesItem;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class SaveWebhookGrantRequest extends JsonSerializableType
{
    /**
     * @var string $idempotencyKey
     */
    public string $idempotencyKey;

    /**
     * @var array<value-of<SaveWebhookGrantRequestScopesItem>> $scopes
     */
    #[JsonProperty('scopes'), ArrayType(['string'])]
    public array $scopes;

    /**
     * @param array{
     *   idempotencyKey: string,
     *   scopes: array<value-of<SaveWebhookGrantRequestScopesItem>>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->idempotencyKey = $values['idempotencyKey'];
        $this->scopes = $values['scopes'];
    }
}
