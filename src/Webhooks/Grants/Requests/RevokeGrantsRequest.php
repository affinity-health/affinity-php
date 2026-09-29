<?php

namespace Affinity\Webhooks\Grants\Requests;

use Affinity\Core\Json\JsonSerializableType;

class RevokeGrantsRequest extends JsonSerializableType
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
