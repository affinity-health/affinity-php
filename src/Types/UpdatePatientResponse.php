<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class UpdatePatientResponse extends JsonSerializableType
{
    /**
     * @var ?UpdatePatientResponseAddress $address
     */
    #[JsonProperty('address')]
    public ?UpdatePatientResponseAddress $address;

    /**
     * @var ?string $defaultShippingAddressId
     */
    #[JsonProperty('defaultShippingAddressId')]
    public ?string $defaultShippingAddressId;

    /**
     * @var ?UpdatePatientResponseShippingAddress $shippingAddress
     */
    #[JsonProperty('shippingAddress')]
    public ?UpdatePatientResponseShippingAddress $shippingAddress;

    /**
     * @var value-of<UpdatePatientResponseAllergyReviewStatus> $allergyReviewStatus
     */
    #[JsonProperty('allergyReviewStatus')]
    public string $allergyReviewStatus;

    /**
     * @var array<UpdatePatientResponseAllergySummaryItem> $allergySummary
     */
    #[JsonProperty('allergySummary'), ArrayType([UpdatePatientResponseAllergySummaryItem::class])]
    public array $allergySummary;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var UpdatePatientResponseClinicalProfile $clinicalProfile
     */
    #[JsonProperty('clinicalProfile')]
    public UpdatePatientResponseClinicalProfile $clinicalProfile;

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
     * @var array<UpdatePatientResponseExternalIdentitiesItem> $externalIdentities
     */
    #[JsonProperty('externalIdentities'), ArrayType([UpdatePatientResponseExternalIdentitiesItem::class])]
    public array $externalIdentities;

    /**
     * @var array<UpdatePatientResponseAddressesItem> $addresses
     */
    #[JsonProperty('addresses'), ArrayType([UpdatePatientResponseAddressesItem::class])]
    public array $addresses;

    /**
     * @var array<UpdatePatientResponseEncountersItem> $encounters
     */
    #[JsonProperty('encounters'), ArrayType([UpdatePatientResponseEncountersItem::class])]
    public array $encounters;

    /**
     * @var value-of<UpdatePatientResponseGender> $gender
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
     * @var UpdatePatientResponseLocation $location
     */
    #[JsonProperty('location')]
    public UpdatePatientResponseLocation $location;

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
     * @var array<UpdatePatientResponseMeasurementsItem> $measurements
     */
    #[JsonProperty('measurements'), ArrayType([UpdatePatientResponseMeasurementsItem::class])]
    public array $measurements;

    /**
     * @var UpdatePatientResponseName $name
     */
    #[JsonProperty('name')]
    public UpdatePatientResponseName $name;

    /**
     * @var value-of<UpdatePatientResponseObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var ?string $phone
     */
    #[JsonProperty('phone')]
    public ?string $phone;

    /**
     * @var array<UpdatePatientResponseProgramsItem> $programs
     */
    #[JsonProperty('programs'), ArrayType([UpdatePatientResponseProgramsItem::class])]
    public array $programs;

    /**
     * @var string $practiceId
     */
    #[JsonProperty('practiceId')]
    public string $practiceId;

    /**
     * @var value-of<UpdatePatientResponseStatus> $status
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
     *   allergyReviewStatus: value-of<UpdatePatientResponseAllergyReviewStatus>,
     *   allergySummary: array<UpdatePatientResponseAllergySummaryItem>,
     *   createdAt: string,
     *   clinicalProfile: UpdatePatientResponseClinicalProfile,
     *   dateOfBirth: string,
     *   externalIdentities: array<UpdatePatientResponseExternalIdentitiesItem>,
     *   addresses: array<UpdatePatientResponseAddressesItem>,
     *   encounters: array<UpdatePatientResponseEncountersItem>,
     *   gender: value-of<UpdatePatientResponseGender>,
     *   id: string,
     *   livemode: bool,
     *   location: UpdatePatientResponseLocation,
     *   locationId: string,
     *   metadata: array<string, mixed>,
     *   measurements: array<UpdatePatientResponseMeasurementsItem>,
     *   name: UpdatePatientResponseName,
     *   object: value-of<UpdatePatientResponseObject>,
     *   programs: array<UpdatePatientResponseProgramsItem>,
     *   practiceId: string,
     *   status: value-of<UpdatePatientResponseStatus>,
     *   updatedAt: string,
     *   address?: ?UpdatePatientResponseAddress,
     *   defaultShippingAddressId?: ?string,
     *   shippingAddress?: ?UpdatePatientResponseShippingAddress,
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
