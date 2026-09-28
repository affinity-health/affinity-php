<?php

namespace Affinity\Types;

enum ReplayWebhookEventResponseDeliveriesItemStatus: string
{
    case Delivered = "delivered";
    case Failed = "failed";
    case Pending = "pending";
    case Retrying = "retrying";
}
