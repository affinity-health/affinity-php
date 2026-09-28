<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class DeletePatientResponse extends JsonSerializableType
{
    /**
     * @var bool $deleted
     */
    #[JsonProperty('deleted')]
    public bool $deleted;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var value-of<DeletePatientResponseObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @param array{
     *   deleted: bool,
     *   id: string,
     *   object: value-of<DeletePatientResponseObject>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->deleted = $values['deleted'];
        $this->id = $values['id'];
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
