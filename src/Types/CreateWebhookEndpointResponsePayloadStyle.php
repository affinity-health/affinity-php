<?php

namespace Affinity\Types;

enum CreateWebhookEndpointResponsePayloadStyle: string
{
    case Thin = "thin";
    case Snapshot = "snapshot";
}
