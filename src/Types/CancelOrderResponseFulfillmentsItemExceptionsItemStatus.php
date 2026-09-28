<?php

namespace Affinity\Types;

enum CancelOrderResponseFulfillmentsItemExceptionsItemStatus: string
{
    case Open = "open";
    case Acknowledged = "acknowledged";
    case Resolved = "resolved";
}
