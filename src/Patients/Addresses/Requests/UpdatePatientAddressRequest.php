<?php

namespace Affinity\Patients\Addresses\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Patients\Addresses\Types\UpdatePatientAddressRequestAddress;
use Affinity\Core\Json\JsonProperty;

class UpdatePatientAddressRequest extends JsonSerializableType
{
    /**
     * @var ?string $idempotencyKey Optional in the SDK. A fresh key is generated once per call when omitted. Supply a stable key to retry across calls.
     */
    public ?string $idempotencyKey;

    /**
     * @var ?string $affinityActorId Required for user actors and optional for system actors. Omit both actor headers to use the authenticated service account as a system actor.
     */
    public ?string $affinityActorId;

    /**
     * @var ?string $affinityActorType Use user when a person initiated the action and system for autonomous work. Omit both actor headers to default to system.
     */
    public ?string $affinityActorType;

    /**
     * @var ?UpdatePatientAddressRequestAddress $address
     */
    #[JsonProperty('address')]
    public ?UpdatePatientAddressRequestAddress $address;

    /**
     * @var ?string $label
     */
    #[JsonProperty('label')]
    public ?string $label;

    /**
     * @var ?string $recipientName
     */
    #[JsonProperty('recipientName')]
    public ?string $recipientName;

    /**
     * @var ?bool $preferredShipping
     */
    #[JsonProperty('preferredShipping')]
    public ?bool $preferredShipping;

    /**
     * @param array{
     *   idempotencyKey?: ?string,
     *   affinityActorId?: ?string,
     *   affinityActorType?: ?string,
     *   address?: ?UpdatePatientAddressRequestAddress,
     *   label?: ?string,
     *   recipientName?: ?string,
     *   preferredShipping?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->idempotencyKey = $values['idempotencyKey'] ?? null;
        $this->affinityActorId = $values['affinityActorId'] ?? null;
        $this->affinityActorType = $values['affinityActorType'] ?? null;
        $this->address = $values['address'] ?? null;
        $this->label = $values['label'] ?? null;
        $this->recipientName = $values['recipientName'] ?? null;
        $this->preferredShipping = $values['preferredShipping'] ?? null;
    }
}
