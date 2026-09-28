<?php

namespace Affinity\Practices\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Practices\Types\CreatePracticeRequestAddress;
use Affinity\Practices\Types\CreatePracticeRequestAttestations;
use Affinity\Practices\Types\CreatePracticeRequestComplianceContact;
use Affinity\Core\Types\ArrayType;
use Affinity\Practices\Types\CreatePracticeRequestPrescribersItem;
use Affinity\Practices\Types\CreatePracticeRequestPrimaryContact;

class CreatePracticeRequest extends JsonSerializableType
{
    /**
     * @var ?string $idempotencyKey
     */
    public ?string $idempotencyKey;

    /**
     * @var ?bool $liveEnabled Enable Live access at creation. Requires an approved platform and a Live request. Defaults to false.
     */
    #[JsonProperty('liveEnabled')]
    public ?bool $liveEnabled;

    /**
     * @var CreatePracticeRequestAddress $address
     */
    #[JsonProperty('address')]
    public CreatePracticeRequestAddress $address;

    /**
     * @var CreatePracticeRequestAttestations $attestations
     */
    #[JsonProperty('attestations')]
    public CreatePracticeRequestAttestations $attestations;

    /**
     * @var ?CreatePracticeRequestComplianceContact $complianceContact
     */
    #[JsonProperty('complianceContact')]
    public ?CreatePracticeRequestComplianceContact $complianceContact;

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
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?array<CreatePracticeRequestPrescribersItem> $prescribers
     */
    #[JsonProperty('prescribers'), ArrayType([CreatePracticeRequestPrescribersItem::class])]
    public ?array $prescribers;

    /**
     * @var ?CreatePracticeRequestPrimaryContact $primaryContact
     */
    #[JsonProperty('primaryContact')]
    public ?CreatePracticeRequestPrimaryContact $primaryContact;

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
     *   address: CreatePracticeRequestAddress,
     *   attestations: CreatePracticeRequestAttestations,
     *   name: string,
     *   idempotencyKey?: ?string,
     *   liveEnabled?: ?bool,
     *   complianceContact?: ?CreatePracticeRequestComplianceContact,
     *   externalId?: ?string,
     *   legalName?: ?string,
     *   metadata?: ?array<string, mixed>,
     *   prescribers?: ?array<CreatePracticeRequestPrescribersItem>,
     *   primaryContact?: ?CreatePracticeRequestPrimaryContact,
     *   supportEmail?: ?string,
     *   supportPhone?: ?string,
     *   timezone?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->idempotencyKey = $values['idempotencyKey'] ?? null;
        $this->liveEnabled = $values['liveEnabled'] ?? null;
        $this->address = $values['address'];
        $this->attestations = $values['attestations'];
        $this->complianceContact = $values['complianceContact'] ?? null;
        $this->externalId = $values['externalId'] ?? null;
        $this->legalName = $values['legalName'] ?? null;
        $this->metadata = $values['metadata'] ?? null;
        $this->name = $values['name'];
        $this->prescribers = $values['prescribers'] ?? null;
        $this->primaryContact = $values['primaryContact'] ?? null;
        $this->supportEmail = $values['supportEmail'] ?? null;
        $this->supportPhone = $values['supportPhone'] ?? null;
        $this->timezone = $values['timezone'] ?? null;
    }
}
