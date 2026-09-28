<?php

namespace Affinity\Catalog\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Catalog\Types\ListShippingOptionsRequestDestinationType;

class ListShippingOptionsRequest extends JsonSerializableType
{
    /**
     * @var string $destinationState
     */
    public string $destinationState;

    /**
     * @var ?value-of<ListShippingOptionsRequestDestinationType> $destinationType
     */
    public ?string $destinationType;

    /**
     * @param array{
     *   destinationState: string,
     *   destinationType?: ?value-of<ListShippingOptionsRequestDestinationType>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->destinationState = $values['destinationState'];
        $this->destinationType = $values['destinationType'] ?? null;
    }
}
