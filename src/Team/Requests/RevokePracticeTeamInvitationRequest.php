<?php

namespace Affinity\Team\Requests;

use Affinity\Core\Json\JsonSerializableType;

class RevokePracticeTeamInvitationRequest extends JsonSerializableType
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
