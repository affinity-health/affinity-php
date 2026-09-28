<?php

namespace Affinity\Account\Requests;

use Affinity\Core\Json\JsonSerializableType;

class GetAccountRequest extends JsonSerializableType
{
    /**
     * @var ?string $orgId
     */
    public ?string $orgId;

    /**
     * @param array{
     *   orgId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->orgId = $values['orgId'] ?? null;
    }
}
