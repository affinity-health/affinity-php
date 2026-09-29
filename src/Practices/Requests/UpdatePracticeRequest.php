<?php

namespace Affinity\Practices\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Practices\Types\UpdatePracticeRequestAddress;
use Affinity\Practices\Types\UpdatePracticeRequestAttestations;
use Affinity\Practices\Types\UpdatePracticeRequestComplianceContact;
use Affinity\Core\Types\ArrayType;
use Affinity\Practices\Types\UpdatePracticeRequestPrescribersItem;
use Affinity\Practices\Types\UpdatePracticeRequestPrimaryContact;

class UpdatePracticeRequest extends JsonSerializableType
{
    /**
     * @var ?string $idempotencyKey Optional in the SDK. A fresh key is generated once per call when omitted. Supply a stable key to retry across calls.
     */
    public ?string $idempotencyKey;

    /**
     * @var ?bool $liveEnabled Enable or disable Live access for an owned practice. Requires an approved platform and a Live request. Affinity Admin decisions take precedence.
     */
    #[JsonProperty('liveEnabled')]
    public ?bool $liveEnabled;

    /**
     * @var ?UpdatePracticeRequestAddress $address
     */
    #[JsonProperty('address')]
    public ?UpdatePracticeRequestAddress $address;

    /**
     * @var ?UpdatePracticeRequestAttestations $attestations
     */
    #[JsonProperty('attestations')]
    public ?UpdatePracticeRequestAttestations $attestations;

    /**
     * @var ?UpdatePracticeRequestComplianceContact $complianceContact
     */
    #[JsonProperty('complianceContact')]
    public ?UpdatePracticeRequestComplianceContact $complianceContact;

    /**
     * @var ?string $externalId
     */
    #[JsonProperty('externalId')]
    public ?string $externalId;

    /**
     * @var ?string $legalName
     */
    #[JsonProperty('legalName')]
    public ?string $legalName;

    /**
     * @var ?array<string, mixed> $metadata
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    public ?array $metadata;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?array<UpdatePracticeRequestPrescribersItem> $prescribers
     */
    #[JsonProperty('prescribers'), ArrayType([UpdatePracticeRequestPrescribersItem::class])]
    public ?array $prescribers;

    /**
     * @var ?UpdatePracticeRequestPrimaryContact $primaryContact
     */
    #[JsonProperty('primaryContact')]
    public ?UpdatePracticeRequestPrimaryContact $primaryContact;

    /**
     * @var ?string $supportEmail
     */
    #[JsonProperty('supportEmail')]
    public ?string $supportEmail;

    /**
     * @var ?string $supportPhone
     */
    #[JsonProperty('supportPhone')]
    public ?string $supportPhone;

    /**
     * @var ?string $timezone Optional IANA timezone override. Omit to leave unchanged; null clears it. No timezone is inferred when creating a record.
     */
    #[JsonProperty('timezone')]
    public ?string $timezone;

    /**
     * @param array{
     *   idempotencyKey?: ?string,
     *   liveEnabled?: ?bool,
     *   address?: ?UpdatePracticeRequestAddress,
     *   attestations?: ?UpdatePracticeRequestAttestations,
     *   complianceContact?: ?UpdatePracticeRequestComplianceContact,
     *   externalId?: ?string,
     *   legalName?: ?string,
     *   metadata?: ?array<string, mixed>,
     *   name?: ?string,
     *   prescribers?: ?array<UpdatePracticeRequestPrescribersItem>,
     *   primaryContact?: ?UpdatePracticeRequestPrimaryContact,
     *   supportEmail?: ?string,
     *   supportPhone?: ?string,
     *   timezone?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->idempotencyKey = $values['idempotencyKey'] ?? null;
        $this->liveEnabled = $values['liveEnabled'] ?? null;
        $this->address = $values['address'] ?? null;
        $this->attestations = $values['attestations'] ?? null;
        $this->complianceContact = $values['complianceContact'] ?? null;
        $this->externalId = $values['externalId'] ?? null;
        $this->legalName = $values['legalName'] ?? null;
        $this->metadata = $values['metadata'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->prescribers = $values['prescribers'] ?? null;
        $this->primaryContact = $values['primaryContact'] ?? null;
        $this->supportEmail = $values['supportEmail'] ?? null;
        $this->supportPhone = $values['supportPhone'] ?? null;
        $this->timezone = $values['timezone'] ?? null;
    }
}
