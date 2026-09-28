<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class CancelOrderResponse extends JsonSerializableType
{
    /**
     * @var string $revision Opaque revision of the complete order prescription set. Send the revision you reviewed as expectedRevision; never replace it automatically after a conflict.
     */
    #[JsonProperty('revision')]
    public string $revision;

    /**
     * @var array<CancelOrderResponseOtcItemsItem> $otcItems
     */
    #[JsonProperty('otcItems'), ArrayType([CancelOrderResponseOtcItemsItem::class])]
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
     * @var CancelOrderResponseMetadata $metadata
     */
    #[JsonProperty('metadata')]
    public CancelOrderResponseMetadata $metadata;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var array<CancelOrderResponseFulfillmentsItem> $fulfillments
     */
    #[JsonProperty('fulfillments'), ArrayType([CancelOrderResponseFulfillmentsItem::class])]
    public array $fulfillments;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var array<CancelOrderResponseLifecycleEventsItem> $lifecycleEvents
     */
    #[JsonProperty('lifecycleEvents'), ArrayType([CancelOrderResponseLifecycleEventsItem::class])]
    public array $lifecycleEvents;

    /**
     * @var bool $livemode
     */
    #[JsonProperty('livemode')]
    public bool $livemode;

    /**
     * @var value-of<CancelOrderResponseObject> $object
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
     * @var ?CancelOrderResponseReview $review
     */
    #[JsonProperty('review')]
    public ?CancelOrderResponseReview $review;

    /**
     * @var array<CancelOrderResponsePrescriptionsItem> $prescriptions
     */
    #[JsonProperty('prescriptions'), ArrayType([CancelOrderResponsePrescriptionsItem::class])]
    public array $prescriptions;

    /**
     * @var value-of<CancelOrderResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var string $updatedAt
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @var CancelOrderResponseCancellation $cancellation
     */
    #[JsonProperty('cancellation')]
    public CancelOrderResponseCancellation $cancellation;

    /**
     * @param array{
     *   revision: string,
     *   otcItems: array<CancelOrderResponseOtcItemsItem>,
     *   metadata: CancelOrderResponseMetadata,
     *   createdAt: string,
     *   fulfillments: array<CancelOrderResponseFulfillmentsItem>,
     *   id: string,
     *   lifecycleEvents: array<CancelOrderResponseLifecycleEventsItem>,
     *   livemode: bool,
     *   object: value-of<CancelOrderResponseObject>,
     *   patientId: string,
     *   patientName: string,
     *   patientState: string,
     *   practiceId: string,
     *   prescriptions: array<CancelOrderResponsePrescriptionsItem>,
     *   status: value-of<CancelOrderResponseStatus>,
     *   updatedAt: string,
     *   cancellation: CancelOrderResponseCancellation,
     *   practiceMedicationTotalCents?: ?int,
     *   externalOrderId?: ?string,
     *   patientExternalId?: ?string,
     *   prescriberName?: ?string,
     *   prescriberNpi?: ?string,
     *   review?: ?CancelOrderResponseReview,
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
        $this->cancellation = $values['cancellation'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
