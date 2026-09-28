<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Core\Json\JsonProperty;

class GetAccountResponseUser extends JsonSerializableType
{
    /**
     * @var string $email
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var ?bool $emailVerified
     */
    #[JsonProperty('emailVerified')]
    public ?bool $emailVerified;

    /**
     * @var ?string $image
     */
    #[JsonProperty('image')]
    public ?string $image;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?bool $twoFactorEnabled
     */
    #[JsonProperty('twoFactorEnabled')]
    public ?bool $twoFactorEnabled;

    /**
     * @var string $userId
     */
    #[JsonProperty('userId')]
    public string $userId;

    /**
     * @param array{
     *   email: string,
     *   name: string,
     *   userId: string,
     *   emailVerified?: ?bool,
     *   image?: ?string,
     *   twoFactorEnabled?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->email = $values['email'];
        $this->emailVerified = $values['emailVerified'] ?? null;
        $this->image = $values['image'] ?? null;
        $this->name = $values['name'];
        $this->twoFactorEnabled = $values['twoFactorEnabled'] ?? null;
        $this->userId = $values['userId'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
