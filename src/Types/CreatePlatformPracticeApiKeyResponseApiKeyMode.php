<?php

namespace Affinity\Types;

enum CreatePlatformPracticeApiKeyResponseApiKeyMode: string
{
    case Live = "live";
    case Test = "test";
}
