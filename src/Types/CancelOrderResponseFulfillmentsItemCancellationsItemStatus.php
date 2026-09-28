<?php

namespace Affinity\Types;

enum CancelOrderResponseFulfillmentsItemCancellationsItemStatus: string
{
    case Requested = "requested";
    case Sent = "sent";
    case Confirmed = "confirmed";
    case Rejected = "rejected";
    case Failed = "failed";
    case TooLate = "too_late";
}
