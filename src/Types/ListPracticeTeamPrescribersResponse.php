<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class ListPracticeTeamPrescribersResponse extends JsonSerializableType
{
    /**
     * @var array<ListPracticeTeamPrescribersResponseDataItem> $data
     */
    #[JsonProperty('data'), ArrayType([ListPracticeTeamPrescribersResponseDataItem::class])]
    public array $data;

    /**
     * @var bool $hasMore
     */
    #[JsonProperty('hasMore')]
    public bool $hasMore;

    /**
     * @var value-of<ListPracticeTeamPrescribersResponseObject> $object
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var string $url
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @param array{
     *   data: array<ListPracticeTeamPrescribersResponseDataItem>,
     *   hasMore: bool,
     *   object: value-of<ListPracticeTeamPrescribersResponseObject>,
     *   url: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->data = $values['data'];
        $this->hasMore = $values['hasMore'];
        $this->object = $values['object'];
        $this->url = $values['url'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
