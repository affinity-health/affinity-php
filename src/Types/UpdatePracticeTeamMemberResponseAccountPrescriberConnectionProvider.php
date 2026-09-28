<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class UpdatePracticeTeamMemberResponseAccountPrescriberConnectionProvider extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $legalName
     */
    #[JsonProperty('legalName')]
    public string $legalName;

    /**
     * @var ?string $credentials
     */
    #[JsonProperty('credentials')]
    public ?string $credentials;

    /**
     * @var ?string $phone
     */
    #[JsonProperty('phone')]
    public ?string $phone;

    /**
     * @var ?UpdatePracticeTeamMemberResponseAccountPrescriberConnectionProviderAddress $address
     */
    #[JsonProperty('address')]
    public ?UpdatePracticeTeamMemberResponseAccountPrescriberConnectionProviderAddress $address;

    /**
     * @var string $npi
     */
    #[JsonProperty('npi')]
    public string $npi;

    /**
     * @var string $practiceStatus
     */
    #[JsonProperty('practiceStatus')]
    public string $practiceStatus;

    /**
     * @var array<UpdatePracticeTeamMemberResponseAccountPrescriberConnectionProviderLicensesItem> $licenses
     */
    #[JsonProperty('licenses'), ArrayType([UpdatePracticeTeamMemberResponseAccountPrescriberConnectionProviderLicensesItem::class])]
    public array $licenses;

    /**
     * @param array{
     *   id: string,
     *   name: string,
     *   legalName: string,
     *   npi: string,
     *   practiceStatus: string,
     *   licenses: array<UpdatePracticeTeamMemberResponseAccountPrescriberConnectionProviderLicensesItem>,
     *   credentials?: ?string,
     *   phone?: ?string,
     *   address?: ?UpdatePracticeTeamMemberResponseAccountPrescriberConnectionProviderAddress,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'];
        $this->legalName = $values['legalName'];
        $this->credentials = $values['credentials'] ?? null;
        $this->phone = $values['phone'] ?? null;
        $this->address = $values['address'] ?? null;
        $this->npi = $values['npi'];
        $this->practiceStatus = $values['practiceStatus'];
        $this->licenses = $values['licenses'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
