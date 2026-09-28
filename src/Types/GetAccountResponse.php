<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;
use Affinity\Core\Types\ArrayType;

class GetAccountResponse extends JsonSerializableType
{
    /**
     * @var GetAccountResponseAccount $account
     */
    #[JsonProperty('account')]
    public GetAccountResponseAccount $account;

    /**
     * @var bool $livemode True for a Live request; false for a Test request.
     */
    #[JsonProperty('livemode')]
    public bool $livemode;

    /**
     * @var ?array<string> $scopes Effective scopes of the authenticated API key. Null for a dashboard session; use membership.permissions for that session.
     */
    #[JsonProperty('scopes'), ArrayType(['string'])]
    public ?array $scopes;

    /**
     * @var GetAccountResponseMembership $membership
     */
    #[JsonProperty('membership')]
    public GetAccountResponseMembership $membership;

    /**
     * @var value-of<GetAccountResponseOperatingMode> $operatingMode The organization's Live-access status, independent of this request's livemode.
     */
    #[JsonProperty('operatingMode')]
    public string $operatingMode;

    /**
     * @var GetAccountResponseUser $user
     */
    #[JsonProperty('user')]
    public GetAccountResponseUser $user;

    /**
     * @param array{
     *   account: GetAccountResponseAccount,
     *   livemode: bool,
     *   membership: GetAccountResponseMembership,
     *   operatingMode: value-of<GetAccountResponseOperatingMode>,
     *   user: GetAccountResponseUser,
     *   scopes?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->account = $values['account'];
        $this->livemode = $values['livemode'];
        $this->scopes = $values['scopes'] ?? null;
        $this->membership = $values['membership'];
        $this->operatingMode = $values['operatingMode'];
        $this->user = $values['user'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
