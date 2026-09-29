<?php

namespace Affinity\Webhooks\Endpoints\Types;

enum UpdateWebhookEndpointRequestStatus: string
{
    case Active = "active";
    case Suspended = "suspended";
    case Disabled = "disabled";
}
