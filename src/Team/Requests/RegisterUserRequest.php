<?php

namespace Affinity\Team\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Team\Types\RegisterUserRequestRole;
use Affinity\Team\Types\RegisterUserRequestRolesItem;
use Affinity\Core\Types\ArrayType;
use Affinity\Team\Types\RegisterUserRequestProfileDetails;
use Affinity\Team\Types\RegisterUserRequestLicensesItem;
use Affinity\Team\Types\RegisterUserRequestAddress;

class RegisterUserRequest extends JsonSerializableType
{
    /**
     * @var string $idempotencyKey
     */
    public string $idempotencyKey;

    /**
     * @var string $externalId
     */
    #[JsonProperty('externalId')]
    public string $externalId;

    /**
     * @var string $email
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var value-of<RegisterUserRequestRole> $role
     */
    #[JsonProperty('role')]
    public string $role;

    /**
     * @var ?array<value-of<RegisterUserRequestRolesItem>> $roles
     */
    #[JsonProperty('roles'), ArrayType(['string'])]
    public ?array $roles;

    /**
     * @var ?RegisterUserRequestProfileDetails $profileDetails
     */
    #[JsonProperty('profileDetails')]
    public ?RegisterUserRequestProfileDetails $profileDetails;

    /**
     * @var ?string $npi
     */
    #[JsonProperty('npi')]
    public ?string $npi;

    /**
     * @var ?array<RegisterUserRequestLicensesItem> $licenses
     */
    #[JsonProperty('licenses'), ArrayType([RegisterUserRequestLicensesItem::class])]
    public ?array $licenses;

    /**
     * @var ?string $legalName
     */
    #[JsonProperty('legalName')]
    public ?string $legalName;

    /**
     * @var ?string $displayName
     */
    #[JsonProperty('displayName')]
    public ?string $displayName;

    /**
     * @var ?string $credentials
     */
    #[JsonProperty('credentials')]
    public ?string $credentials;

    /**
     * @var ?RegisterUserRequestAddress $address
     */
    #[JsonProperty('address')]
    public ?RegisterUserRequestAddress $address;

    /**
     * @var ?string $phone
     */
    #[JsonProperty('phone')]
    public ?string $phone;

    /**
     * @var ?array<string> $locationIds
     */
    #[JsonProperty('locationIds'), ArrayType(['string'])]
    public ?array $locationIds;

    /**
     * @var bool $identityAttestation
     */
    #[JsonProperty('identityAttestation')]
    public bool $identityAttestation;

    /**
     * @param array{
     *   idempotencyKey: string,
     *   externalId: string,
     *   email: string,
     *   name: string,
     *   role: value-of<RegisterUserRequestRole>,
     *   identityAttestation: bool,
     *   roles?: ?array<value-of<RegisterUserRequestRolesItem>>,
     *   profileDetails?: ?RegisterUserRequestProfileDetails,
     *   npi?: ?string,
     *   licenses?: ?array<RegisterUserRequestLicensesItem>,
     *   legalName?: ?string,
     *   displayName?: ?string,
     *   credentials?: ?string,
     *   address?: ?RegisterUserRequestAddress,
     *   phone?: ?string,
     *   locationIds?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->idempotencyKey = $values['idempotencyKey'];
        $this->externalId = $values['externalId'];
        $this->email = $values['email'];
        $this->name = $values['name'];
        $this->role = $values['role'];
        $this->roles = $values['roles'] ?? null;
        $this->profileDetails = $values['profileDetails'] ?? null;
        $this->npi = $values['npi'] ?? null;
        $this->licenses = $values['licenses'] ?? null;
        $this->legalName = $values['legalName'] ?? null;
        $this->displayName = $values['displayName'] ?? null;
        $this->credentials = $values['credentials'] ?? null;
        $this->address = $values['address'] ?? null;
        $this->phone = $values['phone'] ?? null;
        $this->locationIds = $values['locationIds'] ?? null;
        $this->identityAttestation = $values['identityAttestation'];
    }
}
