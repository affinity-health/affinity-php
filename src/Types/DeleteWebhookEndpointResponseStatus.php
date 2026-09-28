<?php

namespace Affinity\Types;

enum DeleteWebhookEndpointResponseStatus: string
{
    case Active = "active";
    case Suspended = "suspended";
    case Disabled = "disabled";
}
