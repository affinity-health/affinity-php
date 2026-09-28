<?php

namespace Affinity\Types;

enum UpdateWebhookEndpointResponsePayloadStyle: string
{
    case Thin = "thin";
    case Snapshot = "snapshot";
}
