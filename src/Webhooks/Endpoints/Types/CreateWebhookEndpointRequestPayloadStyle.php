<?php

namespace Affinity\Webhooks\Endpoints\Types;

enum CreateWebhookEndpointRequestPayloadStyle: string
{
    case Thin = "thin";
    case Snapshot = "snapshot";
}
