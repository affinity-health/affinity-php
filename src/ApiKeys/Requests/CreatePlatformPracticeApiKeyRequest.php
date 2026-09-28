<?php

namespace Affinity\ApiKeys\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;
use Affinity\ApiKeys\Types\CreatePlatformPracticeApiKeyRequestScopesItem;

class CreatePlatformPracticeApiKeyRequest extends JsonSerializableType
{
    /**
     * @var string $idempotencyKey
     */
    public string $idempotencyKey;

    /**
     * @var ?array<string> $allowedIps
     */
    #[JsonProperty('allowedIps'), ArrayType(['string'])]
    public ?array $allowedIps;

    /**
     * @var ?string $expiresAt
     */
    #[JsonProperty('expiresAt')]
    public ?string $expiresAt;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?array<value-of<CreatePlatformPracticeApiKeyRequestScopesItem>> $scopes
     */
    #[JsonProperty('scopes'), ArrayType(['string'])]
    public ?array $scopes;

    /**
     * @param array{
     *   idempotencyKey: string,
     *   name: string,
     *   allowedIps?: ?array<string>,
     *   expiresAt?: ?string,
     *   scopes?: ?array<value-of<CreatePlatformPracticeApiKeyRequestScopesItem>>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->idempotencyKey = $values['idempotencyKey'];
        $this->allowedIps = $values['allowedIps'] ?? null;
        $this->expiresAt = $values['expiresAt'] ?? null;
        $this->name = $values['name'];
        $this->scopes = $values['scopes'] ?? null;
    }
}
