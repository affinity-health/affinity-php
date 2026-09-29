<?php

namespace Affinity\Team\Prescribers\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Team\Prescribers\Types\ListPrescribersRequestStatus;

class ListPrescribersRequest extends JsonSerializableType
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
     * @var ?string $search
     */
    public ?string $search;

    /**
     * @var ?string $npi
     */
    public ?string $npi;

    /**
     * @var ?string $state Match a submitted license jurisdiction. This does not establish signing eligibility.
     */
    public ?string $state;

    /**
     * @var ?value-of<ListPrescribersRequestStatus> $status
     */
    public ?string $status;

    /**
     * @param array{
     *   limit?: ?int,
     *   startingAfter?: ?string,
     *   endingBefore?: ?string,
     *   search?: ?string,
     *   npi?: ?string,
     *   state?: ?string,
     *   status?: ?value-of<ListPrescribersRequestStatus>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->startingAfter = $values['startingAfter'] ?? null;
        $this->endingBefore = $values['endingBefore'] ?? null;
        $this->search = $values['search'] ?? null;
        $this->npi = $values['npi'] ?? null;
        $this->state = $values['state'] ?? null;
        $this->status = $values['status'] ?? null;
    }
}
