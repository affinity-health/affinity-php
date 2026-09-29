<?php

namespace Affinity\Team\Prescribers\Licenses\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class CreatePracticeTeamLicenseRequest extends JsonSerializableType
{
    /**
     * @var ?string $idempotencyKey Optional in the SDK. A fresh key is generated once per call when omitted. Supply a stable key to retry across calls.
     */
    public ?string $idempotencyKey;

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
     *   state: string,
     *   licenseNumber: string,
     *   idempotencyKey?: ?string,
     *   expiresAt?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->idempotencyKey = $values['idempotencyKey'] ?? null;
        $this->state = $values['state'];
        $this->licenseNumber = $values['licenseNumber'];
        $this->expiresAt = $values['expiresAt'] ?? null;
    }
}
