<?php

namespace Affinity\Team\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class RegisterUserRequestProfileDetails extends JsonSerializableType
{
    /**
     * @var ?string $firstName
     */
    #[JsonProperty('firstName')]
    public ?string $firstName;

    /**
     * @var ?string $middleName
     */
    #[JsonProperty('middleName')]
    public ?string $middleName;

    /**
     * @var ?string $lastName
     */
    #[JsonProperty('lastName')]
    public ?string $lastName;

    /**
     * @var ?string $namePrefix
     */
    #[JsonProperty('namePrefix')]
    public ?string $namePrefix;

    /**
     * @var ?string $nameSuffix
     */
    #[JsonProperty('nameSuffix')]
    public ?string $nameSuffix;

    /**
     * @var ?string $fax
     */
    #[JsonProperty('fax')]
    public ?string $fax;

    /**
     * @var ?array<RegisterUserRequestProfileDetailsSpecialtiesItem> $specialties
     */
    #[JsonProperty('specialties'), ArrayType([RegisterUserRequestProfileDetailsSpecialtiesItem::class])]
    public ?array $specialties;

    /**
     * @var ?array<RegisterUserRequestProfileDetailsAddressesItem> $addresses
     */
    #[JsonProperty('addresses'), ArrayType([RegisterUserRequestProfileDetailsAddressesItem::class])]
    public ?array $addresses;

    /**
     * @var ?array<RegisterUserRequestProfileDetailsOtherNamesItem> $otherNames
     */
    #[JsonProperty('otherNames'), ArrayType([RegisterUserRequestProfileDetailsOtherNamesItem::class])]
    public ?array $otherNames;

    /**
     * @var ?array<RegisterUserRequestProfileDetailsIdentifiersItem> $identifiers
     */
    #[JsonProperty('identifiers'), ArrayType([RegisterUserRequestProfileDetailsIdentifiersItem::class])]
    public ?array $identifiers;

    /**
     * @var ?array<RegisterUserRequestProfileDetailsEndpointsItem> $endpoints
     */
    #[JsonProperty('endpoints'), ArrayType([RegisterUserRequestProfileDetailsEndpointsItem::class])]
    public ?array $endpoints;

    /**
     * @var ?array<RegisterUserRequestProfileDetailsCertificationsItem> $certifications
     */
    #[JsonProperty('certifications'), ArrayType([RegisterUserRequestProfileDetailsCertificationsItem::class])]
    public ?array $certifications;

    /**
     * @param array{
     *   firstName?: ?string,
     *   middleName?: ?string,
     *   lastName?: ?string,
     *   namePrefix?: ?string,
     *   nameSuffix?: ?string,
     *   fax?: ?string,
     *   specialties?: ?array<RegisterUserRequestProfileDetailsSpecialtiesItem>,
     *   addresses?: ?array<RegisterUserRequestProfileDetailsAddressesItem>,
     *   otherNames?: ?array<RegisterUserRequestProfileDetailsOtherNamesItem>,
     *   identifiers?: ?array<RegisterUserRequestProfileDetailsIdentifiersItem>,
     *   endpoints?: ?array<RegisterUserRequestProfileDetailsEndpointsItem>,
     *   certifications?: ?array<RegisterUserRequestProfileDetailsCertificationsItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->firstName = $values['firstName'] ?? null;
        $this->middleName = $values['middleName'] ?? null;
        $this->lastName = $values['lastName'] ?? null;
        $this->namePrefix = $values['namePrefix'] ?? null;
        $this->nameSuffix = $values['nameSuffix'] ?? null;
        $this->fax = $values['fax'] ?? null;
        $this->specialties = $values['specialties'] ?? null;
        $this->addresses = $values['addresses'] ?? null;
        $this->otherNames = $values['otherNames'] ?? null;
        $this->identifiers = $values['identifiers'] ?? null;
        $this->endpoints = $values['endpoints'] ?? null;
        $this->certifications = $values['certifications'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
