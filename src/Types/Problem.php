<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class Problem extends JsonSerializableType
{
    /**
     * @var string $code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var ?array<string, mixed> $data
     */
    #[JsonProperty('data'), ArrayType(['string' => 'mixed'])]
    public ?array $data;

    /**
     * @var string $detail
     */
    #[JsonProperty('detail')]
    public string $detail;

    /**
     * @var string $instance
     */
    #[JsonProperty('instance')]
    public string $instance;

    /**
     * @var string $requestId
     */
    #[JsonProperty('requestId')]
    public string $requestId;

    /**
     * @var int $status
     */
    #[JsonProperty('status')]
    public int $status;

    /**
     * @var string $title
     */
    #[JsonProperty('title')]
    public string $title;

    /**
     * @var ?string $traceId
     */
    #[JsonProperty('traceId')]
    public ?string $traceId;

    /**
     * @var string $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @param array{
     *   code: string,
     *   detail: string,
     *   instance: string,
     *   requestId: string,
     *   status: int,
     *   title: string,
     *   type: string,
     *   data?: ?array<string, mixed>,
     *   traceId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->data = $values['data'] ?? null;
        $this->detail = $values['detail'];
        $this->instance = $values['instance'];
        $this->requestId = $values['requestId'];
        $this->status = $values['status'];
        $this->title = $values['title'];
        $this->traceId = $values['traceId'] ?? null;
        $this->type = $values['type'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
