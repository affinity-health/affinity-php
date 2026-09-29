<?php

namespace Affinity\Team\Invitations\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Team\Invitations\Types\InvitePracticeTeamPersonRequestRole;
use Affinity\Team\Invitations\Types\InvitePracticeTeamPersonRequestRolesItem;
use Affinity\Core\Types\ArrayType;
use Affinity\Team\Invitations\Types\InvitePracticeTeamPersonRequestProfileDetails;
use Affinity\Team\Invitations\Types\InvitePracticeTeamPersonRequestLicensesItem;
use Affinity\Team\Invitations\Types\InvitePracticeTeamPersonRequestAddress;

class InvitePracticeTeamPersonRequest extends JsonSerializableType
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
     * @var ?value-of<InvitePracticeTeamPersonRequestRole> $role
     */
    #[JsonProperty('role')]
    public ?string $role;

    /**
     * @var ?array<value-of<InvitePracticeTeamPersonRequestRolesItem>> $roles
     */
    #[JsonProperty('roles'), ArrayType(['string'])]
    public ?array $roles;

    /**
     * @var ?InvitePracticeTeamPersonRequestProfileDetails $profileDetails
     */
    #[JsonProperty('profileDetails')]
    public ?InvitePracticeTeamPersonRequestProfileDetails $profileDetails;

    /**
     * @var ?string $npi
     */
    #[JsonProperty('npi')]
    public ?string $npi;

    /**
     * @var ?array<InvitePracticeTeamPersonRequestLicensesItem> $licenses
     */
    #[JsonProperty('licenses'), ArrayType([InvitePracticeTeamPersonRequestLicensesItem::class])]
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
     * @var ?InvitePracticeTeamPersonRequestAddress $address
     */
    #[JsonProperty('address')]
    public ?InvitePracticeTeamPersonRequestAddress $address;

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
     * @param array{
     *   idempotencyKey: string,
     *   externalId: string,
     *   email: string,
     *   name: string,
     *   role?: ?value-of<InvitePracticeTeamPersonRequestRole>,
     *   roles?: ?array<value-of<InvitePracticeTeamPersonRequestRolesItem>>,
     *   profileDetails?: ?InvitePracticeTeamPersonRequestProfileDetails,
     *   npi?: ?string,
     *   licenses?: ?array<InvitePracticeTeamPersonRequestLicensesItem>,
     *   legalName?: ?string,
     *   displayName?: ?string,
     *   credentials?: ?string,
     *   address?: ?InvitePracticeTeamPersonRequestAddress,
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
        $this->role = $values['role'] ?? null;
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
    }
}
