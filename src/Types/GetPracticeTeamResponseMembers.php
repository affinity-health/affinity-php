<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\Union;

class GetPracticeTeamResponseMembers extends JsonSerializableType
{
    /**
     * @var (
     *    float
     *   |value-of<GetPracticeTeamResponseMembersTotalOne>
     * ) $total
     */
    #[JsonProperty('total'), Union('float', 'string')]
    public float|string $total;

    /**
     * @var (
     *    float
     *   |value-of<GetPracticeTeamResponseMembersActiveOne>
     * ) $active
     */
    #[JsonProperty('active'), Union('float', 'string')]
    public float|string $active;

    /**
     * @var (
     *    float
     *   |value-of<GetPracticeTeamResponseMembersDisabledOne>
     * ) $disabled
     */
    #[JsonProperty('disabled'), Union('float', 'string')]
    public float|string $disabled;

    /**
     * @param array{
     *   total: (
     *    float
     *   |value-of<GetPracticeTeamResponseMembersTotalOne>
     * ),
     *   active: (
     *    float
     *   |value-of<GetPracticeTeamResponseMembersActiveOne>
     * ),
     *   disabled: (
     *    float
     *   |value-of<GetPracticeTeamResponseMembersDisabledOne>
     * ),
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->total = $values['total'];
        $this->active = $values['active'];
        $this->disabled = $values['disabled'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
