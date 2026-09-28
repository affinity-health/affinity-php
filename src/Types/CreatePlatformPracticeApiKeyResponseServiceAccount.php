<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class CreatePlatformPracticeApiKeyResponseServiceAccount extends JsonSerializableType
{
    /**
     * @var value-of<CreatePlatformPracticeApiKeyResponseServiceAccountApiVersion> $apiVersion
     */
    #[JsonProperty('apiVersion')]
    public string $apiVersion;

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
     * @var array<value-of<CreatePlatformPracticeApiKeyResponseServiceAccountMaxScopesItem>> $maxScopes
     */
    #[JsonProperty('maxScopes'), ArrayType(['string'])]
    public array $maxScopes;

    /**
     * @var string $organizationId
     */
    #[JsonProperty('organizationId')]
    public string $organizationId;

    /**
     * @var value-of<CreatePlatformPracticeApiKeyResponseServiceAccountStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var string $subjectId
     */
    #[JsonProperty('subjectId')]
    public string $subjectId;

    /**
     * @var value-of<CreatePlatformPracticeApiKeyResponseServiceAccountSubjectType> $subjectType
     */
    #[JsonProperty('subjectType')]
    public string $subjectType;

    /**
     * @param array{
     *   apiVersion: value-of<CreatePlatformPracticeApiKeyResponseServiceAccountApiVersion>,
     *   displayName: string,
     *   id: string,
     *   maxScopes: array<value-of<CreatePlatformPracticeApiKeyResponseServiceAccountMaxScopesItem>>,
     *   organizationId: string,
     *   status: value-of<CreatePlatformPracticeApiKeyResponseServiceAccountStatus>,
     *   subjectId: string,
     *   subjectType: value-of<CreatePlatformPracticeApiKeyResponseServiceAccountSubjectType>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiVersion = $values['apiVersion'];
        $this->displayName = $values['displayName'];
        $this->id = $values['id'];
        $this->maxScopes = $values['maxScopes'];
        $this->organizationId = $values['organizationId'];
        $this->status = $values['status'];
        $this->subjectId = $values['subjectId'];
        $this->subjectType = $values['subjectType'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
