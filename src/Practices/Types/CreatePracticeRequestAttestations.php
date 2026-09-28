<?php

namespace Affinity\Practices\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class CreatePracticeRequestAttestations extends JsonSerializableType
{
    /**
     * @var bool $authorizedPracticeRelationship
     */
    #[JsonProperty('authorizedPracticeRelationship')]
    public bool $authorizedPracticeRelationship;

    /**
     * @var bool $authorizedPhiTransfer
     */
    #[JsonProperty('authorizedPhiTransfer')]
    public bool $authorizedPhiTransfer;

    /**
     * @var bool $minimumNecessaryPhi
     */
    #[JsonProperty('minimumNecessaryPhi')]
    public bool $minimumNecessaryPhi;

    /**
     * @var bool $providerDataAccuracy
     */
    #[JsonProperty('providerDataAccuracy')]
    public bool $providerDataAccuracy;

    /**
     * @param array{
     *   authorizedPracticeRelationship: bool,
     *   authorizedPhiTransfer: bool,
     *   minimumNecessaryPhi: bool,
     *   providerDataAccuracy: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->authorizedPracticeRelationship = $values['authorizedPracticeRelationship'];
        $this->authorizedPhiTransfer = $values['authorizedPhiTransfer'];
        $this->minimumNecessaryPhi = $values['minimumNecessaryPhi'];
        $this->providerDataAccuracy = $values['providerDataAccuracy'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
