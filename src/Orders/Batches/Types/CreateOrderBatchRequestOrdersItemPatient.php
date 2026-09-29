<?php

namespace Affinity\Orders\Batches\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class CreateOrderBatchRequestOrdersItemPatient extends JsonSerializableType
{
    /**
     * @var ?CreateOrderBatchRequestOrdersItemPatientAddress $address
     */
    #[JsonProperty('address')]
    public ?CreateOrderBatchRequestOrdersItemPatientAddress $address;

    /**
     * @var ?CreateOrderBatchRequestOrdersItemPatientClinicalProfile $clinicalProfile
     */
    #[JsonProperty('clinicalProfile')]
    public ?CreateOrderBatchRequestOrdersItemPatientClinicalProfile $clinicalProfile;

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
     * @var ?array<CreateOrderBatchRequestOrdersItemPatientExternalIdentitiesItem> $externalIdentities
     */
    #[JsonProperty('externalIdentities'), ArrayType([CreateOrderBatchRequestOrdersItemPatientExternalIdentitiesItem::class])]
    public ?array $externalIdentities;

    /**
     * @var ?array<CreateOrderBatchRequestOrdersItemPatientAddressesItem> $addresses
     */
    #[JsonProperty('addresses'), ArrayType([CreateOrderBatchRequestOrdersItemPatientAddressesItem::class])]
    public ?array $addresses;

    /**
     * @var ?array<CreateOrderBatchRequestOrdersItemPatientEncountersItem> $encounters
     */
    #[JsonProperty('encounters'), ArrayType([CreateOrderBatchRequestOrdersItemPatientEncountersItem::class])]
    public ?array $encounters;

    /**
     * @var ?value-of<CreateOrderBatchRequestOrdersItemPatientGender> $gender
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
     * @var ?array<CreateOrderBatchRequestOrdersItemPatientMeasurementsItem> $measurements
     */
    #[JsonProperty('measurements'), ArrayType([CreateOrderBatchRequestOrdersItemPatientMeasurementsItem::class])]
    public ?array $measurements;

    /**
     * @var CreateOrderBatchRequestOrdersItemPatientName $name
     */
    #[JsonProperty('name')]
    public CreateOrderBatchRequestOrdersItemPatientName $name;

    /**
     * @var ?string $phone
     */
    #[JsonProperty('phone')]
    public ?string $phone;

    /**
     * @var ?array<CreateOrderBatchRequestOrdersItemPatientProgramsItem> $programs
     */
    #[JsonProperty('programs'), ArrayType([CreateOrderBatchRequestOrdersItemPatientProgramsItem::class])]
    public ?array $programs;

    /**
     * @param array{
     *   dateOfBirth: string,
     *   name: CreateOrderBatchRequestOrdersItemPatientName,
     *   address?: ?CreateOrderBatchRequestOrdersItemPatientAddress,
     *   clinicalProfile?: ?CreateOrderBatchRequestOrdersItemPatientClinicalProfile,
     *   email?: ?string,
     *   externalId?: ?string,
     *   externalIdentities?: ?array<CreateOrderBatchRequestOrdersItemPatientExternalIdentitiesItem>,
     *   addresses?: ?array<CreateOrderBatchRequestOrdersItemPatientAddressesItem>,
     *   encounters?: ?array<CreateOrderBatchRequestOrdersItemPatientEncountersItem>,
     *   gender?: ?value-of<CreateOrderBatchRequestOrdersItemPatientGender>,
     *   locationId?: ?string,
     *   metadata?: ?array<string, mixed>,
     *   medicalRecordNumber?: ?string,
     *   measurements?: ?array<CreateOrderBatchRequestOrdersItemPatientMeasurementsItem>,
     *   phone?: ?string,
     *   programs?: ?array<CreateOrderBatchRequestOrdersItemPatientProgramsItem>,
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
