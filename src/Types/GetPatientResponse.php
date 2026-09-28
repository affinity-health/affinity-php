<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class GetPatientResponse extends JsonSerializableType
{
    /**
     * @var ?GetPatientResponseAddress $address
     */
    #[JsonProperty('address')]
    public ?GetPatientResponseAddress $address;

    /**
     * @var ?string $defaultShippingAddressId
     */
    #[JsonProperty('defaultShippingAddressId')]
    public ?string $defaultShippingAddressId;

    /**
     * @var ?GetPatientResponseShippingAddress $shippingAddress
     */
    #[JsonProperty('shippingAddress')]
    public ?GetPatientResponseShippingAddress $shippingAddress;

    /**
     * @var value-of<GetPatientResponseAllergyReviewStatus> $allergyReviewStatus
     */
    #[JsonProperty('allergyReviewStatus')]
    public string $allergyReviewStatus;

    /**
     * @var array<GetPatientResponseAllergySummaryItem> $allergySummary
     */
    #[JsonProperty('allergySummary'), ArrayType([GetPatientResponseAllergySummaryItem::class])]
    public array $allergySummary;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var GetPatientResponseClinicalProfile $clinicalProfile
     */
    #[JsonProperty('clinicalProfile')]
    public GetPatientResponseClinicalProfile $clinicalProfile;

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
     * @var array<GetPatientResponseExternalIdentitiesItem> $externalIdentities
     */
    #[JsonProperty('externalIdentities'), ArrayType([GetPatientResponseExternalIdentitiesItem::class])]
    public array $externalIdentities;

    /**
     * @var array<GetPatientResponseAddressesItem> $addresses
     */
    #[JsonProperty('addresses'), ArrayType([GetPatientResponseAddressesItem::class])]
    public array $addresses;

    /**
     * @var array<GetPatientResponseEncountersItem> $encounters
     */
    #[JsonProperty('encounters'), ArrayType([GetPatientResponseEncountersItem::class])]
    public array $encounters;

    /**
     * @var value-of<GetPatientResponseGender> $gender
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
     * @var GetPatientResponseLocation $location
     */
    #[JsonProperty('location')]
    public GetPatientResponseLocation $location;

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
     * @var array<GetPatientResponseMeasurementsItem> $measurements
     */
    #[JsonProperty('measurements'), ArrayType([GetPatientResponseMeasurementsItem::class])]
    public array $measurements;

    /**
     * @var GetPatientResponseName $name
     */
    #[JsonProperty('name')]
    public GetPatientResponseName $name;

    /**
     * @var value-of<GetPatientResponseObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var ?string $phone
     */
    #[JsonProperty('phone')]
    public ?string $phone;

    /**
     * @var array<GetPatientResponseProgramsItem> $programs
     */
    #[JsonProperty('programs'), ArrayType([GetPatientResponseProgramsItem::class])]
    public array $programs;

    /**
     * @var string $practiceId
     */
    #[JsonProperty('practiceId')]
    public string $practiceId;

    /**
     * @var value-of<GetPatientResponseStatus> $status
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
     *   allergyReviewStatus: value-of<GetPatientResponseAllergyReviewStatus>,
     *   allergySummary: array<GetPatientResponseAllergySummaryItem>,
     *   createdAt: string,
     *   clinicalProfile: GetPatientResponseClinicalProfile,
     *   dateOfBirth: string,
     *   externalIdentities: array<GetPatientResponseExternalIdentitiesItem>,
     *   addresses: array<GetPatientResponseAddressesItem>,
     *   encounters: array<GetPatientResponseEncountersItem>,
     *   gender: value-of<GetPatientResponseGender>,
     *   id: string,
     *   livemode: bool,
     *   location: GetPatientResponseLocation,
     *   locationId: string,
     *   metadata: array<string, mixed>,
     *   measurements: array<GetPatientResponseMeasurementsItem>,
     *   name: GetPatientResponseName,
     *   object: value-of<GetPatientResponseObject>,
     *   programs: array<GetPatientResponseProgramsItem>,
     *   practiceId: string,
     *   status: value-of<GetPatientResponseStatus>,
     *   updatedAt: string,
     *   address?: ?GetPatientResponseAddress,
     *   defaultShippingAddressId?: ?string,
     *   shippingAddress?: ?GetPatientResponseShippingAddress,
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
