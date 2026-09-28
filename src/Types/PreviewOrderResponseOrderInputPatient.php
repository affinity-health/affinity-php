<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class PreviewOrderResponseOrderInputPatient extends JsonSerializableType
{
    /**
     * @var ?PreviewOrderResponseOrderInputPatientAddress $address
     */
    #[JsonProperty('address')]
    public ?PreviewOrderResponseOrderInputPatientAddress $address;

    /**
     * @var ?PreviewOrderResponseOrderInputPatientClinicalProfile $clinicalProfile
     */
    #[JsonProperty('clinicalProfile')]
    public ?PreviewOrderResponseOrderInputPatientClinicalProfile $clinicalProfile;

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
     * @var ?array<PreviewOrderResponseOrderInputPatientExternalIdentitiesItem> $externalIdentities
     */
    #[JsonProperty('externalIdentities'), ArrayType([PreviewOrderResponseOrderInputPatientExternalIdentitiesItem::class])]
    public ?array $externalIdentities;

    /**
     * @var ?array<PreviewOrderResponseOrderInputPatientAddressesItem> $addresses
     */
    #[JsonProperty('addresses'), ArrayType([PreviewOrderResponseOrderInputPatientAddressesItem::class])]
    public ?array $addresses;

    /**
     * @var ?array<PreviewOrderResponseOrderInputPatientEncountersItem> $encounters
     */
    #[JsonProperty('encounters'), ArrayType([PreviewOrderResponseOrderInputPatientEncountersItem::class])]
    public ?array $encounters;

    /**
     * @var ?value-of<PreviewOrderResponseOrderInputPatientGender> $gender
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
     * @var ?array<PreviewOrderResponseOrderInputPatientMeasurementsItem> $measurements
     */
    #[JsonProperty('measurements'), ArrayType([PreviewOrderResponseOrderInputPatientMeasurementsItem::class])]
    public ?array $measurements;

    /**
     * @var PreviewOrderResponseOrderInputPatientName $name
     */
    #[JsonProperty('name')]
    public PreviewOrderResponseOrderInputPatientName $name;

    /**
     * @var ?string $phone
     */
    #[JsonProperty('phone')]
    public ?string $phone;

    /**
     * @var ?array<PreviewOrderResponseOrderInputPatientProgramsItem> $programs
     */
    #[JsonProperty('programs'), ArrayType([PreviewOrderResponseOrderInputPatientProgramsItem::class])]
    public ?array $programs;

    /**
     * @param array{
     *   dateOfBirth: string,
     *   name: PreviewOrderResponseOrderInputPatientName,
     *   address?: ?PreviewOrderResponseOrderInputPatientAddress,
     *   clinicalProfile?: ?PreviewOrderResponseOrderInputPatientClinicalProfile,
     *   email?: ?string,
     *   externalId?: ?string,
     *   externalIdentities?: ?array<PreviewOrderResponseOrderInputPatientExternalIdentitiesItem>,
     *   addresses?: ?array<PreviewOrderResponseOrderInputPatientAddressesItem>,
     *   encounters?: ?array<PreviewOrderResponseOrderInputPatientEncountersItem>,
     *   gender?: ?value-of<PreviewOrderResponseOrderInputPatientGender>,
     *   locationId?: ?string,
     *   metadata?: ?array<string, mixed>,
     *   medicalRecordNumber?: ?string,
     *   measurements?: ?array<PreviewOrderResponseOrderInputPatientMeasurementsItem>,
     *   phone?: ?string,
     *   programs?: ?array<PreviewOrderResponseOrderInputPatientProgramsItem>,
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
