<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class GetApiAccessResponseServiceAccount extends JsonSerializableType
{
    /**
     * @var value-of<GetApiAccessResponseServiceAccountApiVersion> $apiVersion
     */
    #[JsonProperty('apiVersion')]
    public string $apiVersion;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var value-of<GetApiAccessResponseServiceAccountObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var string $subjectId
     */
    #[JsonProperty('subjectId')]
    public string $subjectId;

    /**
     * @var string $subjectType
     */
    #[JsonProperty('subjectType')]
    public string $subjectType;

    /**
     * @param array{
     *   apiVersion: value-of<GetApiAccessResponseServiceAccountApiVersion>,
     *   id: string,
     *   object: value-of<GetApiAccessResponseServiceAccountObject>,
     *   subjectId: string,
     *   subjectType: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiVersion = $values['apiVersion'];
        $this->id = $values['id'];
        $this->object = $values['object'];
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
