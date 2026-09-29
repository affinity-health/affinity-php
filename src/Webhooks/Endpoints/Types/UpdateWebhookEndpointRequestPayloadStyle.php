<?php

namespace Affinity\Webhooks\Endpoints\Types;

enum UpdateWebhookEndpointRequestPayloadStyle: string
{
    case Thin = "thin";
    case Snapshot = "snapshot";
}
