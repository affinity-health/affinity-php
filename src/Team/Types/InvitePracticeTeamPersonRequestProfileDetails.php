<?php

namespace Affinity\Team\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class InvitePracticeTeamPersonRequestProfileDetails extends JsonSerializableType
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
     * @var ?array<InvitePracticeTeamPersonRequestProfileDetailsSpecialtiesItem> $specialties
     */
    #[JsonProperty('specialties'), ArrayType([InvitePracticeTeamPersonRequestProfileDetailsSpecialtiesItem::class])]
    public ?array $specialties;

    /**
     * @var ?array<InvitePracticeTeamPersonRequestProfileDetailsAddressesItem> $addresses
     */
    #[JsonProperty('addresses'), ArrayType([InvitePracticeTeamPersonRequestProfileDetailsAddressesItem::class])]
    public ?array $addresses;

    /**
     * @var ?array<InvitePracticeTeamPersonRequestProfileDetailsOtherNamesItem> $otherNames
     */
    #[JsonProperty('otherNames'), ArrayType([InvitePracticeTeamPersonRequestProfileDetailsOtherNamesItem::class])]
    public ?array $otherNames;

    /**
     * @var ?array<InvitePracticeTeamPersonRequestProfileDetailsIdentifiersItem> $identifiers
     */
    #[JsonProperty('identifiers'), ArrayType([InvitePracticeTeamPersonRequestProfileDetailsIdentifiersItem::class])]
    public ?array $identifiers;

    /**
     * @var ?array<InvitePracticeTeamPersonRequestProfileDetailsEndpointsItem> $endpoints
     */
    #[JsonProperty('endpoints'), ArrayType([InvitePracticeTeamPersonRequestProfileDetailsEndpointsItem::class])]
    public ?array $endpoints;

    /**
     * @var ?array<InvitePracticeTeamPersonRequestProfileDetailsCertificationsItem> $certifications
     */
    #[JsonProperty('certifications'), ArrayType([InvitePracticeTeamPersonRequestProfileDetailsCertificationsItem::class])]
    public ?array $certifications;

    /**
     * @param array{
     *   firstName?: ?string,
     *   middleName?: ?string,
     *   lastName?: ?string,
     *   namePrefix?: ?string,
     *   nameSuffix?: ?string,
     *   fax?: ?string,
     *   specialties?: ?array<InvitePracticeTeamPersonRequestProfileDetailsSpecialtiesItem>,
     *   addresses?: ?array<InvitePracticeTeamPersonRequestProfileDetailsAddressesItem>,
     *   otherNames?: ?array<InvitePracticeTeamPersonRequestProfileDetailsOtherNamesItem>,
     *   identifiers?: ?array<InvitePracticeTeamPersonRequestProfileDetailsIdentifiersItem>,
     *   endpoints?: ?array<InvitePracticeTeamPersonRequestProfileDetailsEndpointsItem>,
     *   certifications?: ?array<InvitePracticeTeamPersonRequestProfileDetailsCertificationsItem>,
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
