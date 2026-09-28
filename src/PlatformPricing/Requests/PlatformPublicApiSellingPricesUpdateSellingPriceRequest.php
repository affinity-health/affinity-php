<?php

namespace Affinity\PlatformPricing\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class PlatformPublicApiSellingPricesUpdateSellingPriceRequest extends JsonSerializableType
{
    /**
     * @var string $idempotencyKey
     */
    public string $idempotencyKey;

    /**
     * @var ?string $practiceId
     */
    #[JsonProperty('practiceId')]
    public ?string $practiceId;

    /**
     * @var ?int $amountCents
     */
    #[JsonProperty('amountCents')]
    public ?int $amountCents;

    /**
     * @var int $baseVersion
     */
    #[JsonProperty('baseVersion')]
    public int $baseVersion;

    /**
     * @param array{
     *   idempotencyKey: string,
     *   baseVersion: int,
     *   practiceId?: ?string,
     *   amountCents?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->idempotencyKey = $values['idempotencyKey'];
        $this->practiceId = $values['practiceId'] ?? null;
        $this->amountCents = $values['amountCents'] ?? null;
        $this->baseVersion = $values['baseVersion'];
    }
}
