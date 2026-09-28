<?php

namespace Affinity\Types;

enum ReplayWebhookEventResponseAttemptsItemTrigger: string
{
    case Automatic = "automatic";
    case Manual = "manual";
    case Test = "test";
}
