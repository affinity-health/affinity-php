<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class PreviewOrderResponseOrderInputPrescriber extends JsonSerializableType
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
     * @var ?PreviewOrderResponseOrderInputPrescriberProfile $profile
     */
    #[JsonProperty('profile')]
    public ?PreviewOrderResponseOrderInputPrescriberProfile $profile;

    /**
     * @param array{
     *   id?: ?string,
     *   npi?: ?string,
     *   externalId?: ?string,
     *   profile?: ?PreviewOrderResponseOrderInputPrescriberProfile,
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
