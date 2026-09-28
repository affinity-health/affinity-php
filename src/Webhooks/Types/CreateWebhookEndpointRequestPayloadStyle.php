<?php

namespace Affinity\Webhooks\Types;

enum CreateWebhookEndpointRequestPayloadStyle: string
{
    case Thin = "thin";
    case Snapshot = "snapshot";
}
