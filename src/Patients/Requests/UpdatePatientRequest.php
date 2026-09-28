<?php

namespace Affinity\Patients\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Patients\Types\UpdatePatientRequestAddress;
use Affinity\Core\Json\JsonProperty;
use Affinity\Patients\Types\UpdatePatientRequestClinicalProfile;
use Affinity\Patients\Types\UpdatePatientRequestExternalIdentitiesItem;
use Affinity\Core\Types\ArrayType;
use Affinity\Patients\Types\UpdatePatientRequestAddressesItem;
use Affinity\Patients\Types\UpdatePatientRequestEncountersItem;
use Affinity\Patients\Types\UpdatePatientRequestGender;
use Affinity\Patients\Types\UpdatePatientRequestMeasurementsItem;
use Affinity\Patients\Types\UpdatePatientRequestName;
use Affinity\Patients\Types\UpdatePatientRequestProgramsItem;
use Affinity\Patients\Types\UpdatePatientRequestStatus;

class UpdatePatientRequest extends JsonSerializableType
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
     * @var ?UpdatePatientRequestAddress $address
     */
    #[JsonProperty('address')]
    public ?UpdatePatientRequestAddress $address;

    /**
     * @var ?UpdatePatientRequestClinicalProfile $clinicalProfile
     */
    #[JsonProperty('clinicalProfile')]
    public ?UpdatePatientRequestClinicalProfile $clinicalProfile;

    /**
     * @var ?string $dateOfBirth
     */
    #[JsonProperty('dateOfBirth')]
    public ?string $dateOfBirth;

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
     * @var ?array<UpdatePatientRequestExternalIdentitiesItem> $externalIdentities
     */
    #[JsonProperty('externalIdentities'), ArrayType([UpdatePatientRequestExternalIdentitiesItem::class])]
    public ?array $externalIdentities;

    /**
     * @var ?array<UpdatePatientRequestAddressesItem> $addresses
     */
    #[JsonProperty('addresses'), ArrayType([UpdatePatientRequestAddressesItem::class])]
    public ?array $addresses;

    /**
     * @var ?array<UpdatePatientRequestEncountersItem> $encounters
     */
    #[JsonProperty('encounters'), ArrayType([UpdatePatientRequestEncountersItem::class])]
    public ?array $encounters;

    /**
     * @var ?value-of<UpdatePatientRequestGender> $gender
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
     * @var ?array<UpdatePatientRequestMeasurementsItem> $measurements
     */
    #[JsonProperty('measurements'), ArrayType([UpdatePatientRequestMeasurementsItem::class])]
    public ?array $measurements;

    /**
     * @var ?UpdatePatientRequestName $name
     */
    #[JsonProperty('name')]
    public ?UpdatePatientRequestName $name;

    /**
     * @var ?array<UpdatePatientRequestProgramsItem> $programs
     */
    #[JsonProperty('programs'), ArrayType([UpdatePatientRequestProgramsItem::class])]
    public ?array $programs;

    /**
     * @var ?string $phone
     */
    #[JsonProperty('phone')]
    public ?string $phone;

    /**
     * @var ?value-of<UpdatePatientRequestStatus> $status
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @param array{
     *   idempotencyKey: string,
     *   affinityActorId?: ?string,
     *   affinityActorType?: ?string,
     *   address?: ?UpdatePatientRequestAddress,
     *   clinicalProfile?: ?UpdatePatientRequestClinicalProfile,
     *   dateOfBirth?: ?string,
     *   email?: ?string,
     *   externalId?: ?string,
     *   externalIdentities?: ?array<UpdatePatientRequestExternalIdentitiesItem>,
     *   addresses?: ?array<UpdatePatientRequestAddressesItem>,
     *   encounters?: ?array<UpdatePatientRequestEncountersItem>,
     *   gender?: ?value-of<UpdatePatientRequestGender>,
     *   locationId?: ?string,
     *   metadata?: ?array<string, mixed>,
     *   medicalRecordNumber?: ?string,
     *   measurements?: ?array<UpdatePatientRequestMeasurementsItem>,
     *   name?: ?UpdatePatientRequestName,
     *   programs?: ?array<UpdatePatientRequestProgramsItem>,
     *   phone?: ?string,
     *   status?: ?value-of<UpdatePatientRequestStatus>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->idempotencyKey = $values['idempotencyKey'];
        $this->affinityActorId = $values['affinityActorId'] ?? null;
        $this->affinityActorType = $values['affinityActorType'] ?? null;
        $this->address = $values['address'] ?? null;
        $this->clinicalProfile = $values['clinicalProfile'] ?? null;
        $this->dateOfBirth = $values['dateOfBirth'] ?? null;
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
        $this->name = $values['name'] ?? null;
        $this->programs = $values['programs'] ?? null;
        $this->phone = $values['phone'] ?? null;
        $this->status = $values['status'] ?? null;
    }
}
