<?php

namespace Affinity\Team\Prescribers\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Team\Prescribers\Types\UpdatePracticeTeamPrescriberRequestAddress;
use Affinity\Team\Prescribers\Types\UpdatePracticeTeamPrescriberRequestPracticeStatus;

class UpdatePracticeTeamPrescriberRequest extends JsonSerializableType
{
    /**
     * @var ?string $idempotencyKey Optional in the SDK. A fresh key is generated once per call when omitted. Supply a stable key to retry across calls.
     */
    public ?string $idempotencyKey;

    /**
     * @var ?string $displayName
     */
    #[JsonProperty('displayName')]
    public ?string $displayName;

    /**
     * @var ?string $legalName
     */
    #[JsonProperty('legalName')]
    public ?string $legalName;

    /**
     * @var ?string $credentials
     */
    #[JsonProperty('credentials')]
    public ?string $credentials;

    /**
     * @var ?string $phone
     */
    #[JsonProperty('phone')]
    public ?string $phone;

    /**
     * @var ?UpdatePracticeTeamPrescriberRequestAddress $address
     */
    #[JsonProperty('address')]
    public ?UpdatePracticeTeamPrescriberRequestAddress $address;

    /**
     * @var ?value-of<UpdatePracticeTeamPrescriberRequestPracticeStatus> $practiceStatus
     */
    #[JsonProperty('practiceStatus')]
    public ?string $practiceStatus;

    /**
     * @param array{
     *   idempotencyKey?: ?string,
     *   displayName?: ?string,
     *   legalName?: ?string,
     *   credentials?: ?string,
     *   phone?: ?string,
     *   address?: ?UpdatePracticeTeamPrescriberRequestAddress,
     *   practiceStatus?: ?value-of<UpdatePracticeTeamPrescriberRequestPracticeStatus>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->idempotencyKey = $values['idempotencyKey'] ?? null;
        $this->displayName = $values['displayName'] ?? null;
        $this->legalName = $values['legalName'] ?? null;
        $this->credentials = $values['credentials'] ?? null;
        $this->phone = $values['phone'] ?? null;
        $this->address = $values['address'] ?? null;
        $this->practiceStatus = $values['practiceStatus'] ?? null;
    }
}
