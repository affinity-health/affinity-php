<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class ListPracticesResponseDataItemPrescribersItem extends JsonSerializableType
{
    /**
     * @var ?string $credentials
     */
    #[JsonProperty('credentials')]
    public ?string $credentials;

    /**
     * @var array<string> $licenseStates
     */
    #[JsonProperty('licenseStates'), ArrayType(['string'])]
    public array $licenseStates;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $npi
     */
    #[JsonProperty('npi')]
    public string $npi;

    /**
     * @param array{
     *   licenseStates: array<string>,
     *   name: string,
     *   npi: string,
     *   credentials?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->credentials = $values['credentials'] ?? null;
        $this->licenseStates = $values['licenseStates'];
        $this->name = $values['name'];
        $this->npi = $values['npi'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
