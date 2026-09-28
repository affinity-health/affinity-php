<?php

namespace Affinity\Types;

enum DeleteWebhookEndpointResponsePayloadStyle: string
{
    case Thin = "thin";
    case Snapshot = "snapshot";
}
