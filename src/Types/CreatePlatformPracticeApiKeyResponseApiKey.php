<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class CreatePlatformPracticeApiKeyResponseApiKey extends JsonSerializableType
{
    /**
     * @var array<string> $allowedIps
     */
    #[JsonProperty('allowedIps'), ArrayType(['string'])]
    public array $allowedIps;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var ?string $expiresAt
     */
    #[JsonProperty('expiresAt')]
    public ?string $expiresAt;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $keyPrefix
     */
    #[JsonProperty('keyPrefix')]
    public string $keyPrefix;

    /**
     * @var ?string $lastUsedAt
     */
    #[JsonProperty('lastUsedAt')]
    public ?string $lastUsedAt;

    /**
     * @var value-of<CreatePlatformPracticeApiKeyResponseApiKeyMode> $mode
     */
    #[JsonProperty('mode')]
    public string $mode;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $revokedAt
     */
    #[JsonProperty('revokedAt')]
    public ?string $revokedAt;

    /**
     * @var array<value-of<CreatePlatformPracticeApiKeyResponseApiKeyScopesItem>> $scopes
     */
    #[JsonProperty('scopes'), ArrayType(['string'])]
    public array $scopes;

    /**
     * @var value-of<CreatePlatformPracticeApiKeyResponseApiKeyStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @param array{
     *   allowedIps: array<string>,
     *   createdAt: string,
     *   id: string,
     *   keyPrefix: string,
     *   mode: value-of<CreatePlatformPracticeApiKeyResponseApiKeyMode>,
     *   name: string,
     *   scopes: array<value-of<CreatePlatformPracticeApiKeyResponseApiKeyScopesItem>>,
     *   status: value-of<CreatePlatformPracticeApiKeyResponseApiKeyStatus>,
     *   expiresAt?: ?string,
     *   lastUsedAt?: ?string,
     *   revokedAt?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->allowedIps = $values['allowedIps'];
        $this->createdAt = $values['createdAt'];
        $this->expiresAt = $values['expiresAt'] ?? null;
        $this->id = $values['id'];
        $this->keyPrefix = $values['keyPrefix'];
        $this->lastUsedAt = $values['lastUsedAt'] ?? null;
        $this->mode = $values['mode'];
        $this->name = $values['name'];
        $this->revokedAt = $values['revokedAt'] ?? null;
        $this->scopes = $values['scopes'];
        $this->status = $values['status'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
