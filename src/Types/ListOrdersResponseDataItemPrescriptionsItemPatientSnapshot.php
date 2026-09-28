<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class ListOrdersResponseDataItemPrescriptionsItemPatientSnapshot extends JsonSerializableType
{
    /**
     * @var ?array<string, mixed> $address
     */
    #[JsonProperty('address'), ArrayType(['string' => 'mixed'])]
    public ?array $address;

    /**
     * @var ?value-of<ListOrdersResponseDataItemPrescriptionsItemPatientSnapshotAllergyReviewStatus> $allergyReviewStatus
     */
    #[JsonProperty('allergyReviewStatus')]
    public ?string $allergyReviewStatus;

    /**
     * @var string $dateOfBirth
     */
    #[JsonProperty('dateOfBirth')]
    public string $dateOfBirth;

    /**
     * @var ?string $email
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?value-of<ListOrdersResponseDataItemPrescriptionsItemPatientSnapshotGender> $gender
     */
    #[JsonProperty('gender')]
    public ?string $gender;

    /**
     * @var string $legalName
     */
    #[JsonProperty('legalName')]
    public string $legalName;

    /**
     * @var ?string $phone
     */
    #[JsonProperty('phone')]
    public ?string $phone;

    /**
     * @var string $state
     */
    #[JsonProperty('state')]
    public string $state;

    /**
     * @param array{
     *   dateOfBirth: string,
     *   legalName: string,
     *   state: string,
     *   address?: ?array<string, mixed>,
     *   allergyReviewStatus?: ?value-of<ListOrdersResponseDataItemPrescriptionsItemPatientSnapshotAllergyReviewStatus>,
     *   email?: ?string,
     *   gender?: ?value-of<ListOrdersResponseDataItemPrescriptionsItemPatientSnapshotGender>,
     *   phone?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->address = $values['address'] ?? null;
        $this->allergyReviewStatus = $values['allergyReviewStatus'] ?? null;
        $this->dateOfBirth = $values['dateOfBirth'];
        $this->email = $values['email'] ?? null;
        $this->gender = $values['gender'] ?? null;
        $this->legalName = $values['legalName'];
        $this->phone = $values['phone'] ?? null;
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
