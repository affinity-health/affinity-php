<?php

namespace Affinity\Types;

enum GetWebhookEventResponseAttemptsItemTrigger: string
{
    case Automatic = "automatic";
    case Manual = "manual";
    case Test = "test";
}
