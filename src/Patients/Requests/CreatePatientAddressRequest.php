<?php

namespace Affinity\Patients\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Patients\Types\CreatePatientAddressRequestAddress;
use Affinity\Core\Json\JsonProperty;

class CreatePatientAddressRequest extends JsonSerializableType
{
    /**
     * @var string $idempotencyKey
     */
    public string $idempotencyKey;

    /**
     * @var ?string $affinityActorId Required for user actors and optional for system actors. Omit both actor headers to use the authenticated service account as a system actor.
     */
    public ?string $affinityActorId;

    /**
     * @var ?string $affinityActorType Use user when a person initiated the action and system for autonomous work. Omit both actor headers to default to system.
     */
    public ?string $affinityActorType;

    /**
     * @var CreatePatientAddressRequestAddress $address
     */
    #[JsonProperty('address')]
    public CreatePatientAddressRequestAddress $address;

    /**
     * @var ?string $label
     */
    #[JsonProperty('label')]
    public ?string $label;

    /**
     * @var ?bool $preferredShipping
     */
    #[JsonProperty('preferredShipping')]
    public ?bool $preferredShipping;

    /**
     * @var ?string $recipientName
     */
    #[JsonProperty('recipientName')]
    public ?string $recipientName;

    /**
     * @param array{
     *   idempotencyKey: string,
     *   address: CreatePatientAddressRequestAddress,
     *   affinityActorId?: ?string,
     *   affinityActorType?: ?string,
     *   label?: ?string,
     *   preferredShipping?: ?bool,
     *   recipientName?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->idempotencyKey = $values['idempotencyKey'];
        $this->affinityActorId = $values['affinityActorId'] ?? null;
        $this->affinityActorType = $values['affinityActorType'] ?? null;
        $this->address = $values['address'];
        $this->label = $values['label'] ?? null;
        $this->preferredShipping = $values['preferredShipping'] ?? null;
        $this->recipientName = $values['recipientName'] ?? null;
    }
}
