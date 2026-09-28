<?php

namespace Affinity\Webhooks\Requests;

use Affinity\Core\Json\JsonSerializableType;

class ReplayWebhookEventRequest extends JsonSerializableType
{
    /**
     * @var ?string $affinityOrganizationId Defaults to the API key organization. A platform may select a practice or pharmacy only with an explicit webhook grant in this mode. This changes the webhook owner, not the caller or event subscriptions.
     */
    public ?string $affinityOrganizationId;

    /**
     * @var string $idempotencyKey
     */
    public string $idempotencyKey;

    /**
     * @param array{
     *   idempotencyKey: string,
     *   affinityOrganizationId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->affinityOrganizationId = $values['affinityOrganizationId'] ?? null;
        $this->idempotencyKey = $values['idempotencyKey'];
    }
}
