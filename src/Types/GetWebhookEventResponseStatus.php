<?php

namespace Affinity\Types;

enum GetWebhookEventResponseStatus: string
{
    case Delivered = "delivered";
    case Failed = "failed";
    case Pending = "pending";
}
