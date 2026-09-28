<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class UpdatePracticeResponse extends JsonSerializableType
{
    /**
     * @var ?UpdatePracticeResponseAddress $address
     */
    #[JsonProperty('address')]
    public ?UpdatePracticeResponseAddress $address;

    /**
     * @var UpdatePracticeResponseContacts $contacts
     */
    #[JsonProperty('contacts')]
    public UpdatePracticeResponseContacts $contacts;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var ?string $externalId
     */
    #[JsonProperty('externalId')]
    public ?string $externalId;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $legalName
     */
    #[JsonProperty('legalName')]
    public ?string $legalName;

    /**
     * @var bool $livemode
     */
    #[JsonProperty('livemode')]
    public bool $livemode;

    /**
     * @var array<string, mixed> $metadata
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    public array $metadata;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var value-of<UpdatePracticeResponseObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var array<UpdatePracticeResponsePrescribersItem> $prescribers
     */
    #[JsonProperty('prescribers'), ArrayType([UpdatePracticeResponsePrescribersItem::class])]
    public array $prescribers;

    /**
     * @var bool $liveEnabled Whether this practice currently has Live access. False for Test practices.
     */
    #[JsonProperty('liveEnabled')]
    public bool $liveEnabled;

    /**
     * @var ?string $supportEmail
     */
    #[JsonProperty('supportEmail')]
    public ?string $supportEmail;

    /**
     * @var ?string $supportPhone
     */
    #[JsonProperty('supportPhone')]
    public ?string $supportPhone;

    /**
     * @var ?string $timezone
     */
    #[JsonProperty('timezone')]
    public ?string $timezone;

    /**
     * @param array{
     *   contacts: UpdatePracticeResponseContacts,
     *   createdAt: string,
     *   id: string,
     *   livemode: bool,
     *   metadata: array<string, mixed>,
     *   name: string,
     *   object: value-of<UpdatePracticeResponseObject>,
     *   prescribers: array<UpdatePracticeResponsePrescribersItem>,
     *   liveEnabled: bool,
     *   address?: ?UpdatePracticeResponseAddress,
     *   externalId?: ?string,
     *   legalName?: ?string,
     *   supportEmail?: ?string,
     *   supportPhone?: ?string,
     *   timezone?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->address = $values['address'] ?? null;
        $this->contacts = $values['contacts'];
        $this->createdAt = $values['createdAt'];
        $this->externalId = $values['externalId'] ?? null;
        $this->id = $values['id'];
        $this->legalName = $values['legalName'] ?? null;
        $this->livemode = $values['livemode'];
        $this->metadata = $values['metadata'];
        $this->name = $values['name'];
        $this->object = $values['object'];
        $this->prescribers = $values['prescribers'];
        $this->liveEnabled = $values['liveEnabled'];
        $this->supportEmail = $values['supportEmail'] ?? null;
        $this->supportPhone = $values['supportPhone'] ?? null;
        $this->timezone = $values['timezone'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
