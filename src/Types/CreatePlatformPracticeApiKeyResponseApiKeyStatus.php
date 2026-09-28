<?php

namespace Affinity\Types;

enum CreatePlatformPracticeApiKeyResponseApiKeyStatus: string
{
    case Active = "active";
    case Expired = "expired";
    case Revoked = "revoked";
}
