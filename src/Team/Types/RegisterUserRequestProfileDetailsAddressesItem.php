<?php

namespace Affinity\Team\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class RegisterUserRequestProfileDetailsAddressesItem extends JsonSerializableType
{
    /**
     * @var string $purpose
     */
    #[JsonProperty('purpose')]
    public string $purpose;

    /**
     * @var string $line1
     */
    #[JsonProperty('line1')]
    public string $line1;

    /**
     * @var string $line2
     */
    #[JsonProperty('line2')]
    public string $line2;

    /**
     * @var string $city
     */
    #[JsonProperty('city')]
    public string $city;

    /**
     * @var string $state
     */
    #[JsonProperty('state')]
    public string $state;

    /**
     * @var string $postalCode
     */
    #[JsonProperty('postalCode')]
    public string $postalCode;

    /**
     * @var string $country
     */
    #[JsonProperty('country')]
    public string $country;

    /**
     * @var string $phone
     */
    #[JsonProperty('phone')]
    public string $phone;

    /**
     * @var string $fax
     */
    #[JsonProperty('fax')]
    public string $fax;

    /**
     * @param array{
     *   purpose: string,
     *   line1: string,
     *   line2: string,
     *   city: string,
     *   state: string,
     *   postalCode: string,
     *   country: string,
     *   phone: string,
     *   fax: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->purpose = $values['purpose'];
        $this->line1 = $values['line1'];
        $this->line2 = $values['line2'];
        $this->city = $values['city'];
        $this->state = $values['state'];
        $this->postalCode = $values['postalCode'];
        $this->country = $values['country'];
        $this->phone = $values['phone'];
        $this->fax = $values['fax'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
