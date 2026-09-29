<?php

namespace Affinity\Team\Invitations\Requests;

use Affinity\Core\Json\JsonSerializableType;

class ResendInvitationsRequest extends JsonSerializableType
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
