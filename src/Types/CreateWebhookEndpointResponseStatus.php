<?php

namespace Affinity\Types;

enum CreateWebhookEndpointResponseStatus: string
{
    case Active = "active";
    case Suspended = "suspended";
    case Disabled = "disabled";
}
