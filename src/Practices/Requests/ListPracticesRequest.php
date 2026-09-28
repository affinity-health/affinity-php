<?php

namespace Affinity\Practices\Requests;

use Affinity\Core\Json\JsonSerializableType;

class ListPracticesRequest extends JsonSerializableType
{
    /**
     * @var ?string $search Case-insensitive search by practice name or external ID.
     */
    public ?string $search;

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
     * @param array{
     *   search?: ?string,
     *   endingBefore?: ?string,
     *   limit?: ?int,
     *   startingAfter?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->search = $values['search'] ?? null;
        $this->endingBefore = $values['endingBefore'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->startingAfter = $values['startingAfter'] ?? null;
    }
}
