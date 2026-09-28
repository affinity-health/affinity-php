<?php

namespace Affinity\Types;

enum ReplayWebhookEventResponseStatus: string
{
    case Delivered = "delivered";
    case Failed = "failed";
    case Pending = "pending";
}
