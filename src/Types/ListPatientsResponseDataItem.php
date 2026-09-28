<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class ListPatientsResponseDataItem extends JsonSerializableType
{
    /**
     * @var ?ListPatientsResponseDataItemAddress $address
     */
    #[JsonProperty('address')]
    public ?ListPatientsResponseDataItemAddress $address;

    /**
     * @var ?string $defaultShippingAddressId
     */
    #[JsonProperty('defaultShippingAddressId')]
    public ?string $defaultShippingAddressId;

    /**
     * @var ?ListPatientsResponseDataItemShippingAddress $shippingAddress
     */
    #[JsonProperty('shippingAddress')]
    public ?ListPatientsResponseDataItemShippingAddress $shippingAddress;

    /**
     * @var value-of<ListPatientsResponseDataItemAllergyReviewStatus> $allergyReviewStatus
     */
    #[JsonProperty('allergyReviewStatus')]
    public string $allergyReviewStatus;

    /**
     * @var array<ListPatientsResponseDataItemAllergySummaryItem> $allergySummary
     */
    #[JsonProperty('allergySummary'), ArrayType([ListPatientsResponseDataItemAllergySummaryItem::class])]
    public array $allergySummary;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var ListPatientsResponseDataItemClinicalProfile $clinicalProfile
     */
    #[JsonProperty('clinicalProfile')]
    public ListPatientsResponseDataItemClinicalProfile $clinicalProfile;

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
     * @var array<ListPatientsResponseDataItemExternalIdentitiesItem> $externalIdentities
     */
    #[JsonProperty('externalIdentities'), ArrayType([ListPatientsResponseDataItemExternalIdentitiesItem::class])]
    public array $externalIdentities;

    /**
     * @var array<ListPatientsResponseDataItemAddressesItem> $addresses
     */
    #[JsonProperty('addresses'), ArrayType([ListPatientsResponseDataItemAddressesItem::class])]
    public array $addresses;

    /**
     * @var array<ListPatientsResponseDataItemEncountersItem> $encounters
     */
    #[JsonProperty('encounters'), ArrayType([ListPatientsResponseDataItemEncountersItem::class])]
    public array $encounters;

    /**
     * @var value-of<ListPatientsResponseDataItemGender> $gender
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
     * @var ListPatientsResponseDataItemLocation $location
     */
    #[JsonProperty('location')]
    public ListPatientsResponseDataItemLocation $location;

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
     * @var array<ListPatientsResponseDataItemMeasurementsItem> $measurements
     */
    #[JsonProperty('measurements'), ArrayType([ListPatientsResponseDataItemMeasurementsItem::class])]
    public array $measurements;

    /**
     * @var ListPatientsResponseDataItemName $name
     */
    #[JsonProperty('name')]
    public ListPatientsResponseDataItemName $name;

    /**
     * @var value-of<ListPatientsResponseDataItemObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var ?string $phone
     */
    #[JsonProperty('phone')]
    public ?string $phone;

    /**
     * @var array<ListPatientsResponseDataItemProgramsItem> $programs
     */
    #[JsonProperty('programs'), ArrayType([ListPatientsResponseDataItemProgramsItem::class])]
    public array $programs;

    /**
     * @var string $practiceId
     */
    #[JsonProperty('practiceId')]
    public string $practiceId;

    /**
     * @var value-of<ListPatientsResponseDataItemStatus> $status
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
     *   allergyReviewStatus: value-of<ListPatientsResponseDataItemAllergyReviewStatus>,
     *   allergySummary: array<ListPatientsResponseDataItemAllergySummaryItem>,
     *   createdAt: string,
     *   clinicalProfile: ListPatientsResponseDataItemClinicalProfile,
     *   dateOfBirth: string,
     *   externalIdentities: array<ListPatientsResponseDataItemExternalIdentitiesItem>,
     *   addresses: array<ListPatientsResponseDataItemAddressesItem>,
     *   encounters: array<ListPatientsResponseDataItemEncountersItem>,
     *   gender: value-of<ListPatientsResponseDataItemGender>,
     *   id: string,
     *   livemode: bool,
     *   location: ListPatientsResponseDataItemLocation,
     *   locationId: string,
     *   metadata: array<string, mixed>,
     *   measurements: array<ListPatientsResponseDataItemMeasurementsItem>,
     *   name: ListPatientsResponseDataItemName,
     *   object: value-of<ListPatientsResponseDataItemObject>,
     *   programs: array<ListPatientsResponseDataItemProgramsItem>,
     *   practiceId: string,
     *   status: value-of<ListPatientsResponseDataItemStatus>,
     *   updatedAt: string,
     *   address?: ?ListPatientsResponseDataItemAddress,
     *   defaultShippingAddressId?: ?string,
     *   shippingAddress?: ?ListPatientsResponseDataItemShippingAddress,
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
