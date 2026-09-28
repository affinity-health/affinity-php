<?php

namespace Affinity\Types;

enum ListWebhookEndpointsResponseDataItemStatus: string
{
    case Active = "active";
    case Suspended = "suspended";
    case Disabled = "disabled";
}
