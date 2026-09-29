<?php

namespace Affinity\Webhooks\Events\Types;

enum ListEventsRequestStatus: string
{
    case All = "all";
    case Delivered = "delivered";
    case Failed = "failed";
    case Pending = "pending";
}
