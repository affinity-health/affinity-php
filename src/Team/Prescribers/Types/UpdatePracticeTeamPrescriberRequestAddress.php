<?php

namespace Affinity\Team\Prescribers\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class UpdatePracticeTeamPrescriberRequestAddress extends JsonSerializableType
{
    /**
     * @var string $city
     */
    #[JsonProperty('city')]
    public string $city;

    /**
     * @var string $country
     */
    #[JsonProperty('country')]
    public string $country;

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
     * @param array{
     *   city: string,
     *   country: string,
     *   line1: string,
     *   postalCode: string,
     *   state: string,
     *   line2?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->city = $values['city'];
        $this->country = $values['country'];
        $this->line1 = $values['line1'];
        $this->line2 = $values['line2'] ?? null;
        $this->postalCode = $values['postalCode'];
        $this->state = $values['state'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
