<?php

namespace Affinity\Patients\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Patients\Types\CreatePatientRequestAddress;
use Affinity\Core\Json\JsonProperty;
use Affinity\Patients\Types\CreatePatientRequestClinicalProfile;
use Affinity\Patients\Types\CreatePatientRequestExternalIdentitiesItem;
use Affinity\Core\Types\ArrayType;
use Affinity\Patients\Types\CreatePatientRequestAddressesItem;
use Affinity\Patients\Types\CreatePatientRequestEncountersItem;
use Affinity\Patients\Types\CreatePatientRequestGender;
use Affinity\Patients\Types\CreatePatientRequestMeasurementsItem;
use Affinity\Patients\Types\CreatePatientRequestName;
use Affinity\Patients\Types\CreatePatientRequestProgramsItem;

class CreatePatientRequest extends JsonSerializableType
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
     * @var ?CreatePatientRequestAddress $address
     */
    #[JsonProperty('address')]
    public ?CreatePatientRequestAddress $address;

    /**
     * @var ?CreatePatientRequestClinicalProfile $clinicalProfile
     */
    #[JsonProperty('clinicalProfile')]
    public ?CreatePatientRequestClinicalProfile $clinicalProfile;

    /**
     * @var string $dateOfBirth
     */
    #[JsonProperty('dateOfBirth')]
    public string $dateOfBirth;

    /**
     * @var ?string $email
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?string $externalId
     */
    #[JsonProperty('externalId')]
    public ?string $externalId;

    /**
     * @var ?array<CreatePatientRequestExternalIdentitiesItem> $externalIdentities
     */
    #[JsonProperty('externalIdentities'), ArrayType([CreatePatientRequestExternalIdentitiesItem::class])]
    public ?array $externalIdentities;

    /**
     * @var ?array<CreatePatientRequestAddressesItem> $addresses
     */
    #[JsonProperty('addresses'), ArrayType([CreatePatientRequestAddressesItem::class])]
    public ?array $addresses;

    /**
     * @var ?array<CreatePatientRequestEncountersItem> $encounters
     */
    #[JsonProperty('encounters'), ArrayType([CreatePatientRequestEncountersItem::class])]
    public ?array $encounters;

    /**
     * @var ?value-of<CreatePatientRequestGender> $gender
     */
    #[JsonProperty('gender')]
    public ?string $gender;

    /**
     * @var ?string $locationId
     */
    #[JsonProperty('locationId')]
    public ?string $locationId;

    /**
     * @var ?array<string, mixed> $metadata
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    public ?array $metadata;

    /**
     * @var ?string $medicalRecordNumber
     */
    #[JsonProperty('medicalRecordNumber')]
    public ?string $medicalRecordNumber;

    /**
     * @var ?array<CreatePatientRequestMeasurementsItem> $measurements
     */
    #[JsonProperty('measurements'), ArrayType([CreatePatientRequestMeasurementsItem::class])]
    public ?array $measurements;

    /**
     * @var CreatePatientRequestName $name
     */
    #[JsonProperty('name')]
    public CreatePatientRequestName $name;

    /**
     * @var ?string $phone
     */
    #[JsonProperty('phone')]
    public ?string $phone;

    /**
     * @var ?array<CreatePatientRequestProgramsItem> $programs
     */
    #[JsonProperty('programs'), ArrayType([CreatePatientRequestProgramsItem::class])]
    public ?array $programs;

    /**
     * @param array{
     *   dateOfBirth: string,
     *   name: CreatePatientRequestName,
     *   idempotencyKey?: ?string,
     *   affinityActorId?: ?string,
     *   affinityActorType?: ?string,
     *   address?: ?CreatePatientRequestAddress,
     *   clinicalProfile?: ?CreatePatientRequestClinicalProfile,
     *   email?: ?string,
     *   externalId?: ?string,
     *   externalIdentities?: ?array<CreatePatientRequestExternalIdentitiesItem>,
     *   addresses?: ?array<CreatePatientRequestAddressesItem>,
     *   encounters?: ?array<CreatePatientRequestEncountersItem>,
     *   gender?: ?value-of<CreatePatientRequestGender>,
     *   locationId?: ?string,
     *   metadata?: ?array<string, mixed>,
     *   medicalRecordNumber?: ?string,
     *   measurements?: ?array<CreatePatientRequestMeasurementsItem>,
     *   phone?: ?string,
     *   programs?: ?array<CreatePatientRequestProgramsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->idempotencyKey = $values['idempotencyKey'] ?? null;
        $this->affinityActorId = $values['affinityActorId'] ?? null;
        $this->affinityActorType = $values['affinityActorType'] ?? null;
        $this->address = $values['address'] ?? null;
        $this->clinicalProfile = $values['clinicalProfile'] ?? null;
        $this->dateOfBirth = $values['dateOfBirth'];
        $this->email = $values['email'] ?? null;
        $this->externalId = $values['externalId'] ?? null;
        $this->externalIdentities = $values['externalIdentities'] ?? null;
        $this->addresses = $values['addresses'] ?? null;
        $this->encounters = $values['encounters'] ?? null;
        $this->gender = $values['gender'] ?? null;
        $this->locationId = $values['locationId'] ?? null;
        $this->metadata = $values['metadata'] ?? null;
        $this->medicalRecordNumber = $values['medicalRecordNumber'] ?? null;
        $this->measurements = $values['measurements'] ?? null;
        $this->name = $values['name'];
        $this->phone = $values['phone'] ?? null;
        $this->programs = $values['programs'] ?? null;
    }
}
