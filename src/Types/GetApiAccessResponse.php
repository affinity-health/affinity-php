<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class GetApiAccessResponse extends JsonSerializableType
{
    /**
     * @var GetApiAccessResponseApiKey $apiKey
     */
    #[JsonProperty('apiKey')]
    public GetApiAccessResponseApiKey $apiKey;

    /**
     * @var bool $livemode
     */
    #[JsonProperty('livemode')]
    public bool $livemode;

    /**
     * @var value-of<GetApiAccessResponseObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var array<string> $scopes
     */
    #[JsonProperty('scopes'), ArrayType(['string'])]
    public array $scopes;

    /**
     * @var GetApiAccessResponseServiceAccount $serviceAccount
     */
    #[JsonProperty('serviceAccount')]
    public GetApiAccessResponseServiceAccount $serviceAccount;

    /**
     * @param array{
     *   apiKey: GetApiAccessResponseApiKey,
     *   livemode: bool,
     *   object: value-of<GetApiAccessResponseObject>,
     *   scopes: array<string>,
     *   serviceAccount: GetApiAccessResponseServiceAccount,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->livemode = $values['livemode'];
        $this->object = $values['object'];
        $this->scopes = $values['scopes'];
        $this->serviceAccount = $values['serviceAccount'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
