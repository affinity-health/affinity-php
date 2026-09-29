<?php

namespace Affinity\Locations\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class CreatePracticeLocationRequest extends JsonSerializableType
{
    /**
     * @var ?string $idempotencyKey Optional in the SDK. A fresh key is generated once per call when omitted. Supply a stable key to retry across calls.
     */
    public ?string $idempotencyKey;

    /**
     * @var ?string $city
     */
    #[JsonProperty('city')]
    public ?string $city;

    /**
     * @var ?string $country
     */
    #[JsonProperty('country')]
    public ?string $country;

    /**
     * @var ?string $line1
     */
    #[JsonProperty('line1')]
    public ?string $line1;

    /**
     * @var ?string $line2
     */
    #[JsonProperty('line2')]
    public ?string $line2;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $phone
     */
    #[JsonProperty('phone')]
    public ?string $phone;

    /**
     * @var ?string $postalCode
     */
    #[JsonProperty('postalCode')]
    public ?string $postalCode;

    /**
     * @var ?string $state
     */
    #[JsonProperty('state')]
    public ?string $state;

    /**
     * @var ?string $timezone Optional IANA timezone override. Omit to leave unchanged; null clears it. No timezone is inferred when creating a record.
     */
    #[JsonProperty('timezone')]
    public ?string $timezone;

    /**
     * @param array{
     *   name: string,
     *   idempotencyKey?: ?string,
     *   city?: ?string,
     *   country?: ?string,
     *   line1?: ?string,
     *   line2?: ?string,
     *   phone?: ?string,
     *   postalCode?: ?string,
     *   state?: ?string,
     *   timezone?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->idempotencyKey = $values['idempotencyKey'] ?? null;
        $this->city = $values['city'] ?? null;
        $this->country = $values['country'] ?? null;
        $this->line1 = $values['line1'] ?? null;
        $this->line2 = $values['line2'] ?? null;
        $this->name = $values['name'];
        $this->phone = $values['phone'] ?? null;
        $this->postalCode = $values['postalCode'] ?? null;
        $this->state = $values['state'] ?? null;
        $this->timezone = $values['timezone'] ?? null;
    }
}
