<?php

namespace Affinity\Orders\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Orders\Types\SubmitOrderRequestPrescriber;

class SubmitOrderRequest extends JsonSerializableType
{
    /**
     * @var string $idempotencyKey
     */
    public string $idempotencyKey;

    /**
     * @var string $practiceId
     */
    #[JsonProperty('practiceId')]
    public string $practiceId;

    /**
     * @var ?string $userId
     */
    #[JsonProperty('userId')]
    public ?string $userId;

    /**
     * @var ?SubmitOrderRequestPrescriber $prescriber
     */
    #[JsonProperty('prescriber')]
    public ?SubmitOrderRequestPrescriber $prescriber;

    /**
     * @param array{
     *   idempotencyKey: string,
     *   practiceId: string,
     *   userId?: ?string,
     *   prescriber?: ?SubmitOrderRequestPrescriber,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->idempotencyKey = $values['idempotencyKey'];
        $this->practiceId = $values['practiceId'];
        $this->userId = $values['userId'] ?? null;
        $this->prescriber = $values['prescriber'] ?? null;
    }
}
