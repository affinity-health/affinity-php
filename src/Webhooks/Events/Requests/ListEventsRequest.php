<?php

namespace Affinity\Webhooks\Events\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Webhooks\Events\Types\ListEventsRequestStatus;

class ListEventsRequest extends JsonSerializableType
{
    /**
     * @var ?string $endingBefore
     */
    public ?string $endingBefore;

    /**
     * @var ?int $limit
     */
    public ?int $limit;

    /**
     * @var ?value-of<ListEventsRequestStatus> $status
     */
    public ?string $status;

    /**
     * @var ?string $startingAfter
     */
    public ?string $startingAfter;

    /**
     * @var ?string $affinityOrganizationId Defaults to the API key organization. A platform may select a practice or pharmacy only with an explicit webhook grant in this mode. This changes the webhook owner, not the caller or event subscriptions.
     */
    public ?string $affinityOrganizationId;

    /**
     * @param array{
     *   endingBefore?: ?string,
     *   limit?: ?int,
     *   status?: ?value-of<ListEventsRequestStatus>,
     *   startingAfter?: ?string,
     *   affinityOrganizationId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->endingBefore = $values['endingBefore'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->startingAfter = $values['startingAfter'] ?? null;
        $this->affinityOrganizationId = $values['affinityOrganizationId'] ?? null;
    }
}
