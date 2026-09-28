<?php

namespace Affinity\Webhooks\Types;

enum ListWebhookEventsRequestStatus: string
{
    case All = "all";
    case Delivered = "delivered";
    case Failed = "failed";
    case Pending = "pending";
}
