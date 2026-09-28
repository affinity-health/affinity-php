<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class RegisterUserResponse extends JsonSerializableType
{
    /**
     * @var value-of<RegisterUserResponseObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $practiceId
     */
    #[JsonProperty('practiceId')]
    public string $practiceId;

    /**
     * @var string $memberId
     */
    #[JsonProperty('memberId')]
    public string $memberId;

    /**
     * @var ?string $prescriberId
     */
    #[JsonProperty('prescriberId')]
    public ?string $prescriberId;

    /**
     * @var string $externalId
     */
    #[JsonProperty('externalId')]
    public string $externalId;

    /**
     * @var bool $livemode
     */
    #[JsonProperty('livemode')]
    public bool $livemode;

    /**
     * @param array{
     *   object: value-of<RegisterUserResponseObject>,
     *   id: string,
     *   practiceId: string,
     *   memberId: string,
     *   externalId: string,
     *   livemode: bool,
     *   prescriberId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->object = $values['object'];
        $this->id = $values['id'];
        $this->practiceId = $values['practiceId'];
        $this->memberId = $values['memberId'];
        $this->prescriberId = $values['prescriberId'] ?? null;
        $this->externalId = $values['externalId'];
        $this->livemode = $values['livemode'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
