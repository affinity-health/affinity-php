<?php

namespace Affinity\Types;

enum RotateWebhookEndpointSecretResponseStatus: string
{
    case Active = "active";
    case Suspended = "suspended";
    case Disabled = "disabled";
}
