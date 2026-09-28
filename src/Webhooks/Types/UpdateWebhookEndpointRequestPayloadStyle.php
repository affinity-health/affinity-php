<?php

namespace Affinity\Webhooks\Types;

enum UpdateWebhookEndpointRequestPayloadStyle: string
{
    case Thin = "thin";
    case Snapshot = "snapshot";
}
