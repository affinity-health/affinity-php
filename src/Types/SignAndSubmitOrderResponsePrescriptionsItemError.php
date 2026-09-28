<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\Union;

class SignAndSubmitOrderResponsePrescriptionsItemError extends JsonSerializableType
{
    /**
     * @var string $code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var string $detail
     */
    #[JsonProperty('detail')]
    public string $detail;

    /**
     * @var (
     *    float
     *   |value-of<SignAndSubmitOrderResponsePrescriptionsItemErrorStatusOne>
     * ) $status
     */
    #[JsonProperty('status'), Union('float', 'string')]
    public float|string $status;

    /**
     * @param array{
     *   code: string,
     *   detail: string,
     *   status: (
     *    float
     *   |value-of<SignAndSubmitOrderResponsePrescriptionsItemErrorStatusOne>
     * ),
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->detail = $values['detail'];
        $this->status = $values['status'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
