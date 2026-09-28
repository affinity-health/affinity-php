<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class InvitePracticeTeamPersonResponse extends JsonSerializableType
{
    /**
     * @var InvitePracticeTeamPersonResponsePerson $person
     */
    #[JsonProperty('person')]
    public InvitePracticeTeamPersonResponsePerson $person;

    /**
     * @var value-of<InvitePracticeTeamPersonResponseDelivery> $delivery
     */
    #[JsonProperty('delivery')]
    public string $delivery;

    /**
     * @param array{
     *   person: InvitePracticeTeamPersonResponsePerson,
     *   delivery: value-of<InvitePracticeTeamPersonResponseDelivery>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->person = $values['person'];
        $this->delivery = $values['delivery'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
