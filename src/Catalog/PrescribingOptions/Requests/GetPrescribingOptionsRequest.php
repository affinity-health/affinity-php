<?php

namespace Affinity\Catalog\PrescribingOptions\Requests;

use Affinity\Core\Json\JsonSerializableType;

class GetPrescribingOptionsRequest extends JsonSerializableType
{
    /**
     * @var string $practiceId
     */
    public string $practiceId;

    /**
     * @param array{
     *   practiceId: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->practiceId = $values['practiceId'];
    }
}
