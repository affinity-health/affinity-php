<?php

namespace Affinity\Orders\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Orders\Types\CreateOrderRequestPrescriber;
use Affinity\Orders\Types\CreateOrderRequestOtcItemsItem;
use Affinity\Core\Types\ArrayType;
use Affinity\Core\Types\Union;
use Affinity\Orders\Types\CreateOrderRequestPatient;
use Affinity\Orders\Types\CreateOrderRequestPrescriptionsItem;

class CreateOrderRequest extends JsonSerializableType
{
    /**
     * @var string $idempotencyKey
     */
    public string $idempotencyKey;

    /**
     * @var ?string $affinityActorId Required for user actors and optional for system actors. Omit both actor headers to use the authenticated service account as a system actor.
     */
    public ?string $affinityActorId;

    /**
     * @var ?string $affinityActorType Use user when a person initiated the action and system for autonomous work. Omit both actor headers to default to system.
     */
    public ?string $affinityActorType;

    /**
     * @var string $practiceId
     */
    #[JsonProperty('practiceId')]
    public string $practiceId;

    /**
     * @var ?string $userId
     */
    #[JsonProperty('userId')]
    public ?string $userId;

    /**
     * @var ?CreateOrderRequestPrescriber $prescriber
     */
    #[JsonProperty('prescriber')]
    public ?CreateOrderRequestPrescriber $prescriber;

    /**
     * @var ?array<CreateOrderRequestOtcItemsItem> $otcItems
     */
    #[JsonProperty('otcItems'), ArrayType([CreateOrderRequestOtcItemsItem::class])]
    public ?array $otcItems;

    /**
     * @var ?string $externalOrderId
     */
    #[JsonProperty('externalOrderId')]
    public ?string $externalOrderId;

    /**
     * @var ?array<string, (
     *    string
     *   |float
     *   |bool
     * )|null> $metadata
     */
    #[JsonProperty('metadata'), ArrayType(['string' => new Union(new Union('string', 'float', 'bool'), 'null')])]
    public ?array $metadata;

    /**
     * @var ?string $patientId
     */
    #[JsonProperty('patientId')]
    public ?string $patientId;

    /**
     * @var ?CreateOrderRequestPatient $patient
     */
    #[JsonProperty('patient')]
    public ?CreateOrderRequestPatient $patient;

    /**
     * @var ?string $shippingAddressId
     */
    #[JsonProperty('shippingAddressId')]
    public ?string $shippingAddressId;

    /**
     * @var array<CreateOrderRequestPrescriptionsItem> $prescriptions
     */
    #[JsonProperty('prescriptions'), ArrayType([CreateOrderRequestPrescriptionsItem::class])]
    public array $prescriptions;

    /**
     * @param array{
     *   idempotencyKey: string,
     *   practiceId: string,
     *   prescriptions: array<CreateOrderRequestPrescriptionsItem>,
     *   affinityActorId?: ?string,
     *   affinityActorType?: ?string,
     *   userId?: ?string,
     *   prescriber?: ?CreateOrderRequestPrescriber,
     *   otcItems?: ?array<CreateOrderRequestOtcItemsItem>,
     *   externalOrderId?: ?string,
     *   metadata?: ?array<string, (
     *    string
     *   |float
     *   |bool
     * )|null>,
     *   patientId?: ?string,
     *   patient?: ?CreateOrderRequestPatient,
     *   shippingAddressId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->idempotencyKey = $values['idempotencyKey'];
        $this->affinityActorId = $values['affinityActorId'] ?? null;
        $this->affinityActorType = $values['affinityActorType'] ?? null;
        $this->practiceId = $values['practiceId'];
        $this->userId = $values['userId'] ?? null;
        $this->prescriber = $values['prescriber'] ?? null;
        $this->otcItems = $values['otcItems'] ?? null;
        $this->externalOrderId = $values['externalOrderId'] ?? null;
        $this->metadata = $values['metadata'] ?? null;
        $this->patientId = $values['patientId'] ?? null;
        $this->patient = $values['patient'] ?? null;
        $this->shippingAddressId = $values['shippingAddressId'] ?? null;
        $this->prescriptions = $values['prescriptions'];
    }
}
