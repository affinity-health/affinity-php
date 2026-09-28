<?php

namespace Affinity\Types;

enum RotateWebhookEndpointSecretResponsePayloadStyle: string
{
    case Thin = "thin";
    case Snapshot = "snapshot";
}
