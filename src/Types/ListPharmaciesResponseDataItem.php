<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class ListPharmaciesResponseDataItem extends JsonSerializableType
{
    /**
     * @var value-of<ListPharmaciesResponseDataItemAccess> $access
     */
    #[JsonProperty('access')]
    public string $access;

    /**
     * @var int $catalogItemCount
     */
    #[JsonProperty('catalogItemCount')]
    public int $catalogItemCount;

    /**
     * @var string $facilityType
     */
    #[JsonProperty('facilityType')]
    public string $facilityType;

    /**
     * @var array<ListPharmaciesResponseDataItemFacilityLocationsItem> $facilityLocations
     */
    #[JsonProperty('facilityLocations'), ArrayType([ListPharmaciesResponseDataItemFacilityLocationsItem::class])]
    public array $facilityLocations;

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
     * @var ?string $logoUrl
     */
    #[JsonProperty('logoUrl')]
    public ?string $logoUrl;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var value-of<ListPharmaciesResponseDataItemObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var int $prescriptionsLast30Days
     */
    #[JsonProperty('prescriptionsLast30Days')]
    public int $prescriptionsLast30Days;

    /**
     * @var ?ListPharmaciesResponseDataItemProfile $profile
     */
    #[JsonProperty('profile')]
    public ?ListPharmaciesResponseDataItemProfile $profile;

    /**
     * @var array<string> $restrictedStates
     */
    #[JsonProperty('restrictedStates'), ArrayType(['string'])]
    public array $restrictedStates;

    /**
     * @var array<ListPharmaciesResponseDataItemShippingOptionsItem> $shippingOptions
     */
    #[JsonProperty('shippingOptions'), ArrayType([ListPharmaciesResponseDataItemShippingOptionsItem::class])]
    public array $shippingOptions;

    /**
     * @var array<string> $supportedStates
     */
    #[JsonProperty('supportedStates'), ArrayType(['string'])]
    public array $supportedStates;

    /**
     * @param array{
     *   access: value-of<ListPharmaciesResponseDataItemAccess>,
     *   catalogItemCount: int,
     *   facilityType: string,
     *   facilityLocations: array<ListPharmaciesResponseDataItemFacilityLocationsItem>,
     *   id: string,
     *   livemode: bool,
     *   name: string,
     *   object: value-of<ListPharmaciesResponseDataItemObject>,
     *   prescriptionsLast30Days: int,
     *   restrictedStates: array<string>,
     *   shippingOptions: array<ListPharmaciesResponseDataItemShippingOptionsItem>,
     *   supportedStates: array<string>,
     *   logoUrl?: ?string,
     *   profile?: ?ListPharmaciesResponseDataItemProfile,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->access = $values['access'];
        $this->catalogItemCount = $values['catalogItemCount'];
        $this->facilityType = $values['facilityType'];
        $this->facilityLocations = $values['facilityLocations'];
        $this->id = $values['id'];
        $this->livemode = $values['livemode'];
        $this->logoUrl = $values['logoUrl'] ?? null;
        $this->name = $values['name'];
        $this->object = $values['object'];
        $this->prescriptionsLast30Days = $values['prescriptionsLast30Days'];
        $this->profile = $values['profile'] ?? null;
        $this->restrictedStates = $values['restrictedStates'];
        $this->shippingOptions = $values['shippingOptions'];
        $this->supportedStates = $values['supportedStates'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
