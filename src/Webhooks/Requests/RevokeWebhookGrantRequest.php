<?php

namespace Affinity\Webhooks\Requests;

use Affinity\Core\Json\JsonSerializableType;

class RevokeWebhookGrantRequest extends JsonSerializableType
{
    /**
     * @var string $idempotencyKey
     */
    public string $idempotencyKey;

    /**
     * @param array{
     *   idempotencyKey: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->idempotencyKey = $values['idempotencyKey'];
    }
}
