<?php

namespace Affinity\Types;

enum CancelOrderResponseCancellationOutcomesItemStatus: string
{
    case Confirmed = "confirmed";
    case Failed = "failed";
    case Rejected = "rejected";
    case Requested = "requested";
    case Sent = "sent";
    case TooLate = "too_late";
}
