<?php

namespace Affinity\Types;

enum CancelOrderResponseCancellationStatus: string
{
    case Confirmed = "confirmed";
    case Pending = "pending";
    case Partial = "partial";
    case Failed = "failed";
}
