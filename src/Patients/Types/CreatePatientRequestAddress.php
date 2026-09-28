<?php

namespace Affinity\Patients\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class CreatePatientRequestAddress extends JsonSerializableType
{
    /**
     * @var string $city
     */
    #[JsonProperty('city')]
    public string $city;

    /**
     * @var string $line1
     */
    #[JsonProperty('line1')]
    public string $line1;

    /**
     * @var ?string $line2
     */
    #[JsonProperty('line2')]
    public ?string $line2;

    /**
     * @var string $postalCode
     */
    #[JsonProperty('postalCode')]
    public string $postalCode;

    /**
     * @var string $state
     */
    #[JsonProperty('state')]
    public string $state;

    /**
     * @var ?value-of<CreatePatientRequestAddressCountry> $country
     */
    #[JsonProperty('country')]
    public ?string $country;

    /**
     * @param array{
     *   city: string,
     *   line1: string,
     *   postalCode: string,
     *   state: string,
     *   line2?: ?string,
     *   country?: ?value-of<CreatePatientRequestAddressCountry>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->city = $values['city'];
        $this->line1 = $values['line1'];
        $this->line2 = $values['line2'] ?? null;
        $this->postalCode = $values['postalCode'];
        $this->state = $values['state'];
        $this->country = $values['country'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
