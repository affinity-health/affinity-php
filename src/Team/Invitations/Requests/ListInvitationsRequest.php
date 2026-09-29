<?php

namespace Affinity\Team\Invitations\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Team\Invitations\Types\ListInvitationsRequestStatus;

class ListInvitationsRequest extends JsonSerializableType
{
    /**
     * @var ?int $limit
     */
    public ?int $limit;

    /**
     * @var ?string $startingAfter
     */
    public ?string $startingAfter;

    /**
     * @var ?string $endingBefore
     */
    public ?string $endingBefore;

    /**
     * @var ?value-of<ListInvitationsRequestStatus> $status
     */
    public ?string $status;

    /**
     * @var ?string $email
     */
    public ?string $email;

    /**
     * @var ?string $externalId Match this integration's external identity in the API key's mode.
     */
    public ?string $externalId;

    /**
     * @param array{
     *   limit?: ?int,
     *   startingAfter?: ?string,
     *   endingBefore?: ?string,
     *   status?: ?value-of<ListInvitationsRequestStatus>,
     *   email?: ?string,
     *   externalId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->startingAfter = $values['startingAfter'] ?? null;
        $this->endingBefore = $values['endingBefore'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->externalId = $values['externalId'] ?? null;
    }
}
