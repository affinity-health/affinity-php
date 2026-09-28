<?php

namespace Affinity\Types;

enum UpdateWebhookEndpointResponseStatus: string
{
    case Active = "active";
    case Suspended = "suspended";
    case Disabled = "disabled";
}
