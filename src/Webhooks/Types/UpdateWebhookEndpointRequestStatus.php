<?php

namespace Affinity\Webhooks\Types;

enum UpdateWebhookEndpointRequestStatus: string
{
    case Active = "active";
    case Suspended = "suspended";
    case Disabled = "disabled";
}
