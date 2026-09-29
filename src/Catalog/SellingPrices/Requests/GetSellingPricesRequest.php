<?php

namespace Affinity\Catalog\SellingPrices\Requests;

use Affinity\Core\Json\JsonSerializableType;

class GetSellingPricesRequest extends JsonSerializableType
{
    /**
     * @var ?string $practiceId
     */
    public ?string $practiceId;

    /**
     * @param array{
     *   practiceId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->practiceId = $values['practiceId'] ?? null;
    }
}
