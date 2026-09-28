<?php

namespace Affinity\Orders\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class CreateOrderRequestPatient extends JsonSerializableType
{
    /**
     * @var ?CreateOrderRequestPatientAddress $address
     */
    #[JsonProperty('address')]
    public ?CreateOrderRequestPatientAddress $address;

    /**
     * @var ?CreateOrderRequestPatientClinicalProfile $clinicalProfile
     */
    #[JsonProperty('clinicalProfile')]
    public ?CreateOrderRequestPatientClinicalProfile $clinicalProfile;

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
     * @var ?array<CreateOrderRequestPatientExternalIdentitiesItem> $externalIdentities
     */
    #[JsonProperty('externalIdentities'), ArrayType([CreateOrderRequestPatientExternalIdentitiesItem::class])]
    public ?array $externalIdentities;

    /**
     * @var ?array<CreateOrderRequestPatientAddressesItem> $addresses
     */
    #[JsonProperty('addresses'), ArrayType([CreateOrderRequestPatientAddressesItem::class])]
    public ?array $addresses;

    /**
     * @var ?array<CreateOrderRequestPatientEncountersItem> $encounters
     */
    #[JsonProperty('encounters'), ArrayType([CreateOrderRequestPatientEncountersItem::class])]
    public ?array $encounters;

    /**
     * @var ?value-of<CreateOrderRequestPatientGender> $gender
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
     * @var ?array<CreateOrderRequestPatientMeasurementsItem> $measurements
     */
    #[JsonProperty('measurements'), ArrayType([CreateOrderRequestPatientMeasurementsItem::class])]
    public ?array $measurements;

    /**
     * @var CreateOrderRequestPatientName $name
     */
    #[JsonProperty('name')]
    public CreateOrderRequestPatientName $name;

    /**
     * @var ?string $phone
     */
    #[JsonProperty('phone')]
    public ?string $phone;

    /**
     * @var ?array<CreateOrderRequestPatientProgramsItem> $programs
     */
    #[JsonProperty('programs'), ArrayType([CreateOrderRequestPatientProgramsItem::class])]
    public ?array $programs;

    /**
     * @param array{
     *   dateOfBirth: string,
     *   name: CreateOrderRequestPatientName,
     *   address?: ?CreateOrderRequestPatientAddress,
     *   clinicalProfile?: ?CreateOrderRequestPatientClinicalProfile,
     *   email?: ?string,
     *   externalId?: ?string,
     *   externalIdentities?: ?array<CreateOrderRequestPatientExternalIdentitiesItem>,
     *   addresses?: ?array<CreateOrderRequestPatientAddressesItem>,
     *   encounters?: ?array<CreateOrderRequestPatientEncountersItem>,
     *   gender?: ?value-of<CreateOrderRequestPatientGender>,
     *   locationId?: ?string,
     *   metadata?: ?array<string, mixed>,
     *   medicalRecordNumber?: ?string,
     *   measurements?: ?array<CreateOrderRequestPatientMeasurementsItem>,
     *   phone?: ?string,
     *   programs?: ?array<CreateOrderRequestPatientProgramsItem>,
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
