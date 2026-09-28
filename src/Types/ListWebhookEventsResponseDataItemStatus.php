<?php

namespace Affinity\Types;

enum ListWebhookEventsResponseDataItemStatus: string
{
    case Delivered = "delivered";
    case Failed = "failed";
    case Pending = "pending";
}
