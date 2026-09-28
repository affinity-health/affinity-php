<?php

namespace Affinity\Orders\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class PreviewOrderRequestPatient extends JsonSerializableType
{
    /**
     * @var ?PreviewOrderRequestPatientAddress $address
     */
    #[JsonProperty('address')]
    public ?PreviewOrderRequestPatientAddress $address;

    /**
     * @var ?PreviewOrderRequestPatientClinicalProfile $clinicalProfile
     */
    #[JsonProperty('clinicalProfile')]
    public ?PreviewOrderRequestPatientClinicalProfile $clinicalProfile;

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
     * @var ?array<PreviewOrderRequestPatientExternalIdentitiesItem> $externalIdentities
     */
    #[JsonProperty('externalIdentities'), ArrayType([PreviewOrderRequestPatientExternalIdentitiesItem::class])]
    public ?array $externalIdentities;

    /**
     * @var ?array<PreviewOrderRequestPatientAddressesItem> $addresses
     */
    #[JsonProperty('addresses'), ArrayType([PreviewOrderRequestPatientAddressesItem::class])]
    public ?array $addresses;

    /**
     * @var ?array<PreviewOrderRequestPatientEncountersItem> $encounters
     */
    #[JsonProperty('encounters'), ArrayType([PreviewOrderRequestPatientEncountersItem::class])]
    public ?array $encounters;

    /**
     * @var ?value-of<PreviewOrderRequestPatientGender> $gender
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
     * @var ?array<PreviewOrderRequestPatientMeasurementsItem> $measurements
     */
    #[JsonProperty('measurements'), ArrayType([PreviewOrderRequestPatientMeasurementsItem::class])]
    public ?array $measurements;

    /**
     * @var PreviewOrderRequestPatientName $name
     */
    #[JsonProperty('name')]
    public PreviewOrderRequestPatientName $name;

    /**
     * @var ?string $phone
     */
    #[JsonProperty('phone')]
    public ?string $phone;

    /**
     * @var ?array<PreviewOrderRequestPatientProgramsItem> $programs
     */
    #[JsonProperty('programs'), ArrayType([PreviewOrderRequestPatientProgramsItem::class])]
    public ?array $programs;

    /**
     * @param array{
     *   dateOfBirth: string,
     *   name: PreviewOrderRequestPatientName,
     *   address?: ?PreviewOrderRequestPatientAddress,
     *   clinicalProfile?: ?PreviewOrderRequestPatientClinicalProfile,
     *   email?: ?string,
     *   externalId?: ?string,
     *   externalIdentities?: ?array<PreviewOrderRequestPatientExternalIdentitiesItem>,
     *   addresses?: ?array<PreviewOrderRequestPatientAddressesItem>,
     *   encounters?: ?array<PreviewOrderRequestPatientEncountersItem>,
     *   gender?: ?value-of<PreviewOrderRequestPatientGender>,
     *   locationId?: ?string,
     *   metadata?: ?array<string, mixed>,
     *   medicalRecordNumber?: ?string,
     *   measurements?: ?array<PreviewOrderRequestPatientMeasurementsItem>,
     *   phone?: ?string,
     *   programs?: ?array<PreviewOrderRequestPatientProgramsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
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

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
