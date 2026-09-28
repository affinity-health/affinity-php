<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class CreatePatientResponse extends JsonSerializableType
{
    /**
     * @var ?CreatePatientResponseAddress $address
     */
    #[JsonProperty('address')]
    public ?CreatePatientResponseAddress $address;

    /**
     * @var ?string $defaultShippingAddressId
     */
    #[JsonProperty('defaultShippingAddressId')]
    public ?string $defaultShippingAddressId;

    /**
     * @var ?CreatePatientResponseShippingAddress $shippingAddress
     */
    #[JsonProperty('shippingAddress')]
    public ?CreatePatientResponseShippingAddress $shippingAddress;

    /**
     * @var value-of<CreatePatientResponseAllergyReviewStatus> $allergyReviewStatus
     */
    #[JsonProperty('allergyReviewStatus')]
    public string $allergyReviewStatus;

    /**
     * @var array<CreatePatientResponseAllergySummaryItem> $allergySummary
     */
    #[JsonProperty('allergySummary'), ArrayType([CreatePatientResponseAllergySummaryItem::class])]
    public array $allergySummary;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var CreatePatientResponseClinicalProfile $clinicalProfile
     */
    #[JsonProperty('clinicalProfile')]
    public CreatePatientResponseClinicalProfile $clinicalProfile;

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
     * @var array<CreatePatientResponseExternalIdentitiesItem> $externalIdentities
     */
    #[JsonProperty('externalIdentities'), ArrayType([CreatePatientResponseExternalIdentitiesItem::class])]
    public array $externalIdentities;

    /**
     * @var array<CreatePatientResponseAddressesItem> $addresses
     */
    #[JsonProperty('addresses'), ArrayType([CreatePatientResponseAddressesItem::class])]
    public array $addresses;

    /**
     * @var array<CreatePatientResponseEncountersItem> $encounters
     */
    #[JsonProperty('encounters'), ArrayType([CreatePatientResponseEncountersItem::class])]
    public array $encounters;

    /**
     * @var value-of<CreatePatientResponseGender> $gender
     */
    #[JsonProperty('gender')]
    public string $gender;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var bool $livemode
     */
    #[JsonProperty('livemode')]
    public bool $livemode;

    /**
     * @var CreatePatientResponseLocation $location
     */
    #[JsonProperty('location')]
    public CreatePatientResponseLocation $location;

    /**
     * @var string $locationId
     */
    #[JsonProperty('locationId')]
    public string $locationId;

    /**
     * @var array<string, mixed> $metadata
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    public array $metadata;

    /**
     * @var ?string $medicalRecordNumber
     */
    #[JsonProperty('medicalRecordNumber')]
    public ?string $medicalRecordNumber;

    /**
     * @var array<CreatePatientResponseMeasurementsItem> $measurements
     */
    #[JsonProperty('measurements'), ArrayType([CreatePatientResponseMeasurementsItem::class])]
    public array $measurements;

    /**
     * @var CreatePatientResponseName $name
     */
    #[JsonProperty('name')]
    public CreatePatientResponseName $name;

    /**
     * @var value-of<CreatePatientResponseObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var ?string $phone
     */
    #[JsonProperty('phone')]
    public ?string $phone;

    /**
     * @var array<CreatePatientResponseProgramsItem> $programs
     */
    #[JsonProperty('programs'), ArrayType([CreatePatientResponseProgramsItem::class])]
    public array $programs;

    /**
     * @var string $practiceId
     */
    #[JsonProperty('practiceId')]
    public string $practiceId;

    /**
     * @var value-of<CreatePatientResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var string $updatedAt
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @param array{
     *   allergyReviewStatus: value-of<CreatePatientResponseAllergyReviewStatus>,
     *   allergySummary: array<CreatePatientResponseAllergySummaryItem>,
     *   createdAt: string,
     *   clinicalProfile: CreatePatientResponseClinicalProfile,
     *   dateOfBirth: string,
     *   externalIdentities: array<CreatePatientResponseExternalIdentitiesItem>,
     *   addresses: array<CreatePatientResponseAddressesItem>,
     *   encounters: array<CreatePatientResponseEncountersItem>,
     *   gender: value-of<CreatePatientResponseGender>,
     *   id: string,
     *   livemode: bool,
     *   location: CreatePatientResponseLocation,
     *   locationId: string,
     *   metadata: array<string, mixed>,
     *   measurements: array<CreatePatientResponseMeasurementsItem>,
     *   name: CreatePatientResponseName,
     *   object: value-of<CreatePatientResponseObject>,
     *   programs: array<CreatePatientResponseProgramsItem>,
     *   practiceId: string,
     *   status: value-of<CreatePatientResponseStatus>,
     *   updatedAt: string,
     *   address?: ?CreatePatientResponseAddress,
     *   defaultShippingAddressId?: ?string,
     *   shippingAddress?: ?CreatePatientResponseShippingAddress,
     *   email?: ?string,
     *   externalId?: ?string,
     *   medicalRecordNumber?: ?string,
     *   phone?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->address = $values['address'] ?? null;
        $this->defaultShippingAddressId = $values['defaultShippingAddressId'] ?? null;
        $this->shippingAddress = $values['shippingAddress'] ?? null;
        $this->allergyReviewStatus = $values['allergyReviewStatus'];
        $this->allergySummary = $values['allergySummary'];
        $this->createdAt = $values['createdAt'];
        $this->clinicalProfile = $values['clinicalProfile'];
        $this->dateOfBirth = $values['dateOfBirth'];
        $this->email = $values['email'] ?? null;
        $this->externalId = $values['externalId'] ?? null;
        $this->externalIdentities = $values['externalIdentities'];
        $this->addresses = $values['addresses'];
        $this->encounters = $values['encounters'];
        $this->gender = $values['gender'];
        $this->id = $values['id'];
        $this->livemode = $values['livemode'];
        $this->location = $values['location'];
        $this->locationId = $values['locationId'];
        $this->metadata = $values['metadata'];
        $this->medicalRecordNumber = $values['medicalRecordNumber'] ?? null;
        $this->measurements = $values['measurements'];
        $this->name = $values['name'];
        $this->object = $values['object'];
        $this->phone = $values['phone'] ?? null;
        $this->programs = $values['programs'];
        $this->practiceId = $values['practiceId'];
        $this->status = $values['status'];
        $this->updatedAt = $values['updatedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
