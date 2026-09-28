<?php

namespace Affinity\Types;

enum GetWebhookEventResponseDeliveriesItemStatus: string
{
    case Delivered = "delivered";
    case Failed = "failed";
    case Pending = "pending";
    case Retrying = "retrying";
}
