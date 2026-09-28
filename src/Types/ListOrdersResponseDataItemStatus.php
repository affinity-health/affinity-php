<?php

namespace Affinity\Types;

enum ListOrdersResponseDataItemStatus: string
{
    case Blocked = "blocked";
    case Cancelled = "cancelled";
    case Delivered = "delivered";
    case Draft = "draft";
    case PartiallySubmitted = "partially_submitted";
    case RequiresProviderSignature = "requires_provider_signature";
    case Processing = "processing";
    case Ready = "ready";
    case Rejected = "rejected";
    case Shipped = "shipped";
    case Submitted = "submitted";
}
