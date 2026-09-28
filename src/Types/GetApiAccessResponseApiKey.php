<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class GetApiAccessResponseApiKey extends JsonSerializableType
{
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
     * @var value-of<GetApiAccessResponseApiKeyObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @param array{
     *   id: string,
     *   keyPrefix: string,
     *   object: value-of<GetApiAccessResponseApiKeyObject>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->keyPrefix = $values['keyPrefix'];
        $this->object = $values['object'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
