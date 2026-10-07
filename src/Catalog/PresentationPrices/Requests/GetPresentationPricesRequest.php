<?php

namespace Affinity\Catalog\PresentationPrices\Requests;

use Affinity\Core\Json\JsonSerializableType;

class GetPresentationPricesRequest extends JsonSerializableType
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
