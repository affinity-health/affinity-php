<?php

namespace Affinity\Types;

enum ListWebhookEndpointsResponseDataItemPayloadStyle: string
{
    case Thin = "thin";
    case Snapshot = "snapshot";
}
