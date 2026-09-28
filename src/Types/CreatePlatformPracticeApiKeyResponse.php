<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class CreatePlatformPracticeApiKeyResponse extends JsonSerializableType
{
    /**
     * @var CreatePlatformPracticeApiKeyResponseApiKey $apiKey
     */
    #[JsonProperty('apiKey')]
    public CreatePlatformPracticeApiKeyResponseApiKey $apiKey;

    /**
     * @var string $secret
     */
    #[JsonProperty('secret')]
    public string $secret;

    /**
     * @var CreatePlatformPracticeApiKeyResponseServiceAccount $serviceAccount
     */
    #[JsonProperty('serviceAccount')]
    public CreatePlatformPracticeApiKeyResponseServiceAccount $serviceAccount;

    /**
     * @param array{
     *   apiKey: CreatePlatformPracticeApiKeyResponseApiKey,
     *   secret: string,
     *   serviceAccount: CreatePlatformPracticeApiKeyResponseServiceAccount,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->secret = $values['secret'];
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
