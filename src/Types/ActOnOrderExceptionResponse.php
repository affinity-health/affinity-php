<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class ActOnOrderExceptionResponse extends JsonSerializableType
{
    /**
     * @var string $action
     */
    #[JsonProperty('action')]
    public string $action;

    /**
     * @var string $exceptionId
     */
    #[JsonProperty('exceptionId')]
    public string $exceptionId;

    /**
     * @var value-of<ActOnOrderExceptionResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @param array{
     *   action: string,
     *   exceptionId: string,
     *   status: value-of<ActOnOrderExceptionResponseStatus>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->action = $values['action'];
        $this->exceptionId = $values['exceptionId'];
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
