<?php

namespace Affinity\Locations\Requests;

use Affinity\Core\Json\JsonSerializableType;

class ArchiveLocationsRequest extends JsonSerializableType
{
    /**
     * @var ?string $idempotencyKey Optional in the SDK. A fresh key is generated once per call when omitted. Supply a stable key to retry across calls.
     */
    public ?string $idempotencyKey;

    /**
     * @param array{
     *   idempotencyKey?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->idempotencyKey = $values['idempotencyKey'] ?? null;
    }
}
