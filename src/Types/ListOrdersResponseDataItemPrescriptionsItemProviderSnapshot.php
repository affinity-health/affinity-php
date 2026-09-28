<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class ListOrdersResponseDataItemPrescriptionsItemProviderSnapshot extends JsonSerializableType
{
    /**
     * @var ?array<string, mixed> $address
     */
    #[JsonProperty('address'), ArrayType(['string' => 'mixed'])]
    public ?array $address;

    /**
     * @var ?string $credentials
     */
    #[JsonProperty('credentials')]
    public ?string $credentials;

    /**
     * @var string $legalName
     */
    #[JsonProperty('legalName')]
    public string $legalName;

    /**
     * @var ?string $licenseNumber
     */
    #[JsonProperty('licenseNumber')]
    public ?string $licenseNumber;

    /**
     * @var ?string $licenseState
     */
    #[JsonProperty('licenseState')]
    public ?string $licenseState;

    /**
     * @var ?string $licenseExpiresAt
     */
    #[JsonProperty('licenseExpiresAt')]
    public ?string $licenseExpiresAt;

    /**
     * @var string $npi
     */
    #[JsonProperty('npi')]
    public string $npi;

    /**
     * @var ?string $phone
     */
    #[JsonProperty('phone')]
    public ?string $phone;

    /**
     * @param array{
     *   legalName: string,
     *   npi: string,
     *   address?: ?array<string, mixed>,
     *   credentials?: ?string,
     *   licenseNumber?: ?string,
     *   licenseState?: ?string,
     *   licenseExpiresAt?: ?string,
     *   phone?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->address = $values['address'] ?? null;
        $this->credentials = $values['credentials'] ?? null;
        $this->legalName = $values['legalName'];
        $this->licenseNumber = $values['licenseNumber'] ?? null;
        $this->licenseState = $values['licenseState'] ?? null;
        $this->licenseExpiresAt = $values['licenseExpiresAt'] ?? null;
        $this->npi = $values['npi'];
        $this->phone = $values['phone'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
