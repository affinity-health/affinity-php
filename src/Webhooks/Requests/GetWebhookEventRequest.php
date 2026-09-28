<?php

namespace Affinity\Webhooks\Requests;

use Affinity\Core\Json\JsonSerializableType;

class GetWebhookEventRequest extends JsonSerializableType
{
    /**
     * @var ?string $affinityOrganizationId Defaults to the API key organization. A platform may select a practice or pharmacy only with an explicit webhook grant in this mode. This changes the webhook owner, not the caller or event subscriptions.
     */
    public ?string $affinityOrganizationId;

    /**
     * @param array{
     *   affinityOrganizationId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->affinityOrganizationId = $values['affinityOrganizationId'] ?? null;
    }
}
