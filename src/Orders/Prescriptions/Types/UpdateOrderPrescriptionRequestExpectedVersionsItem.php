<?php

namespace Affinity\Orders\Prescriptions\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class UpdateOrderPrescriptionRequestExpectedVersionsItem extends JsonSerializableType
{
    /**
     * @var string $prescriptionId
     */
    #[JsonProperty('prescriptionId')]
    public string $prescriptionId;

    /**
     * @var int $version
     */
    #[JsonProperty('version')]
    public int $version;

    /**
     * @param array{
     *   prescriptionId: string,
     *   version: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->prescriptionId = $values['prescriptionId'];
        $this->version = $values['version'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
