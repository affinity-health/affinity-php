<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;
use Affinity\Core\Types\Union;

class GetOrderResponse extends JsonSerializableType
{
    /**
     * @var string $revision Opaque revision of the complete order prescription set. Send the revision you reviewed as expectedRevision; never replace it automatically after a conflict.
     */
    #[JsonProperty('revision')]
    public string $revision;

    /**
     * @var array<GetOrderResponseOtcItemsItem> $otcItems
     */
    #[JsonProperty('otcItems'), ArrayType([GetOrderResponseOtcItemsItem::class])]
    public array $otcItems;

    /**
     * @var ?int $practiceMedicationTotalCents Snapshot of the practice-facing medication total. Null until every prescription has recorded submission pricing. Excludes shipping and supplies.
     */
    #[JsonProperty('practiceMedicationTotalCents')]
    public ?int $practiceMedicationTotalCents;

    /**
     * @var ?string $externalOrderId
     */
    #[JsonProperty('externalOrderId')]
    public ?string $externalOrderId;

    /**
     * @var array<string, (
     *    string
     *   |float
     *   |bool
     * )|null> $metadata
     */
    #[JsonProperty('metadata'), ArrayType(['string' => new Union(new Union('string', 'float', 'bool'), 'null')])]
    public array $metadata;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var array<GetOrderResponseFulfillmentsItem> $fulfillments
     */
    #[JsonProperty('fulfillments'), ArrayType([GetOrderResponseFulfillmentsItem::class])]
    public array $fulfillments;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var array<GetOrderResponseLifecycleEventsItem> $lifecycleEvents
     */
    #[JsonProperty('lifecycleEvents'), ArrayType([GetOrderResponseLifecycleEventsItem::class])]
    public array $lifecycleEvents;

    /**
     * @var bool $livemode
     */
    #[JsonProperty('livemode')]
    public bool $livemode;

    /**
     * @var value-of<GetOrderResponseObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var ?string $patientExternalId
     */
    #[JsonProperty('patientExternalId')]
    public ?string $patientExternalId;

    /**
     * @var string $patientId
     */
    #[JsonProperty('patientId')]
    public string $patientId;

    /**
     * @var string $patientName
     */
    #[JsonProperty('patientName')]
    public string $patientName;

    /**
     * @var string $patientState The patient's current clinical state. This is not the saved delivery state; use each prescription's deliveryAddress for shipping.
     */
    #[JsonProperty('patientState')]
    public string $patientState;

    /**
     * @var string $practiceId
     */
    #[JsonProperty('practiceId')]
    public string $practiceId;

    /**
     * @var ?string $prescriberName
     */
    #[JsonProperty('prescriberName')]
    public ?string $prescriberName;

    /**
     * @var ?string $prescriberNpi
     */
    #[JsonProperty('prescriberNpi')]
    public ?string $prescriberNpi;

    /**
     * @var ?GetOrderResponseReview $review
     */
    #[JsonProperty('review')]
    public ?GetOrderResponseReview $review;

    /**
     * @var array<GetOrderResponsePrescriptionsItem> $prescriptions
     */
    #[JsonProperty('prescriptions'), ArrayType([GetOrderResponsePrescriptionsItem::class])]
    public array $prescriptions;

    /**
     * @var value-of<GetOrderResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var string $updatedAt
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @param array{
     *   revision: string,
     *   otcItems: array<GetOrderResponseOtcItemsItem>,
     *   metadata: array<string, (
     *    string
     *   |float
     *   |bool
     * )|null>,
     *   createdAt: string,
     *   fulfillments: array<GetOrderResponseFulfillmentsItem>,
     *   id: string,
     *   lifecycleEvents: array<GetOrderResponseLifecycleEventsItem>,
     *   livemode: bool,
     *   object: value-of<GetOrderResponseObject>,
     *   patientId: string,
     *   patientName: string,
     *   patientState: string,
     *   practiceId: string,
     *   prescriptions: array<GetOrderResponsePrescriptionsItem>,
     *   status: value-of<GetOrderResponseStatus>,
     *   updatedAt: string,
     *   practiceMedicationTotalCents?: ?int,
     *   externalOrderId?: ?string,
     *   patientExternalId?: ?string,
     *   prescriberName?: ?string,
     *   prescriberNpi?: ?string,
     *   review?: ?GetOrderResponseReview,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->revision = $values['revision'];
        $this->otcItems = $values['otcItems'];
        $this->practiceMedicationTotalCents = $values['practiceMedicationTotalCents'] ?? null;
        $this->externalOrderId = $values['externalOrderId'] ?? null;
        $this->metadata = $values['metadata'];
        $this->createdAt = $values['createdAt'];
        $this->fulfillments = $values['fulfillments'];
        $this->id = $values['id'];
        $this->lifecycleEvents = $values['lifecycleEvents'];
        $this->livemode = $values['livemode'];
        $this->object = $values['object'];
        $this->patientExternalId = $values['patientExternalId'] ?? null;
        $this->patientId = $values['patientId'];
        $this->patientName = $values['patientName'];
        $this->patientState = $values['patientState'];
        $this->practiceId = $values['practiceId'];
        $this->prescriberName = $values['prescriberName'] ?? null;
        $this->prescriberNpi = $values['prescriberNpi'] ?? null;
        $this->review = $values['review'] ?? null;
        $this->prescriptions = $values['prescriptions'];
        $this->status = $values['status'];
        $this->updatedAt = $values['updatedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
