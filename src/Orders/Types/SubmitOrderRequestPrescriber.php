<?php

namespace Affinity\Orders\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class SubmitOrderRequestPrescriber extends JsonSerializableType
{
    /**
     * @var ?string $id
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?string $npi
     */
    #[JsonProperty('npi')]
    public ?string $npi;

    /**
     * @var ?string $externalId
     */
    #[JsonProperty('externalId')]
    public ?string $externalId;

    /**
     * @var ?SubmitOrderRequestPrescriberProfile $profile
     */
    #[JsonProperty('profile')]
    public ?SubmitOrderRequestPrescriberProfile $profile;

    /**
     * @param array{
     *   id?: ?string,
     *   npi?: ?string,
     *   externalId?: ?string,
     *   profile?: ?SubmitOrderRequestPrescriberProfile,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->id = $values['id'] ?? null;
        $this->npi = $values['npi'] ?? null;
        $this->externalId = $values['externalId'] ?? null;
        $this->profile = $values['profile'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
