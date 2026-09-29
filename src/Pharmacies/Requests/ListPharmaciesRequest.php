<?php

namespace Affinity\Pharmacies\Requests;

use Affinity\Core\Json\JsonSerializableType;

class ListPharmaciesRequest extends JsonSerializableType
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
     * @var ?string $orgId
     */
    public ?string $orgId;

    /**
     * @var ?string $pharmacyId
     */
    public ?string $pharmacyId;

    /**
     * @var ?string $query
     */
    public ?string $query;

    /**
     * @var ?string $shipsToState
     */
    public ?string $shipsToState;

    /**
     * @var ?string $startingAfter
     */
    public ?string $startingAfter;

    /**
     * @param array{
     *   endingBefore?: ?string,
     *   limit?: ?int,
     *   orgId?: ?string,
     *   pharmacyId?: ?string,
     *   query?: ?string,
     *   shipsToState?: ?string,
     *   startingAfter?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->endingBefore = $values['endingBefore'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->orgId = $values['orgId'] ?? null;
        $this->pharmacyId = $values['pharmacyId'] ?? null;
        $this->query = $values['query'] ?? null;
        $this->shipsToState = $values['shipsToState'] ?? null;
        $this->startingAfter = $values['startingAfter'] ?? null;
    }
}
