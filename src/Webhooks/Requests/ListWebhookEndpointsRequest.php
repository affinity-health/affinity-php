<?php

namespace Affinity\Webhooks\Requests;

use Affinity\Core\Json\JsonSerializableType;

class ListWebhookEndpointsRequest extends JsonSerializableType
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
     *   startingAfter?: ?string,
     *   affinityOrganizationId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->endingBefore = $values['endingBefore'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->startingAfter = $values['startingAfter'] ?? null;
        $this->affinityOrganizationId = $values['affinityOrganizationId'] ?? null;
    }
}
