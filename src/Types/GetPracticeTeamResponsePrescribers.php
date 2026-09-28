<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\Union;

class GetPracticeTeamResponsePrescribers extends JsonSerializableType
{
    /**
     * @var (
     *    float
     *   |value-of<GetPracticeTeamResponsePrescribersTotalOne>
     * ) $total
     */
    #[JsonProperty('total'), Union('float', 'string')]
    public float|string $total;

    /**
     * @var (
     *    float
     *   |value-of<GetPracticeTeamResponsePrescribersActiveOne>
     * ) $active
     */
    #[JsonProperty('active'), Union('float', 'string')]
    public float|string $active;

    /**
     * @param array{
     *   total: (
     *    float
     *   |value-of<GetPracticeTeamResponsePrescribersTotalOne>
     * ),
     *   active: (
     *    float
     *   |value-of<GetPracticeTeamResponsePrescribersActiveOne>
     * ),
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->total = $values['total'];
        $this->active = $values['active'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
