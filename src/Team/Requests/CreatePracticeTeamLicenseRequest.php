<?php

namespace Affinity\Team\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class CreatePracticeTeamLicenseRequest extends JsonSerializableType
{
    /**
     * @var string $idempotencyKey
     */
    public string $idempotencyKey;

    /**
     * @var string $state
     */
    #[JsonProperty('state')]
    public string $state;

    /**
     * @var string $licenseNumber
     */
    #[JsonProperty('licenseNumber')]
    public string $licenseNumber;

    /**
     * @var ?string $expiresAt
     */
    #[JsonProperty('expiresAt')]
    public ?string $expiresAt;

    /**
     * @param array{
     *   idempotencyKey: string,
     *   state: string,
     *   licenseNumber: string,
     *   expiresAt?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->idempotencyKey = $values['idempotencyKey'];
        $this->state = $values['state'];
        $this->licenseNumber = $values['licenseNumber'];
        $this->expiresAt = $values['expiresAt'] ?? null;
    }
}
