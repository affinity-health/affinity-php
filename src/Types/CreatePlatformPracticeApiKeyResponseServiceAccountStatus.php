<?php

namespace Affinity\Types;

enum CreatePlatformPracticeApiKeyResponseServiceAccountStatus: string
{
    case Active = "active";
    case Disabled = "disabled";
}
