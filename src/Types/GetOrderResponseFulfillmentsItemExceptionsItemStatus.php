<?php

namespace Affinity\Types;

enum GetOrderResponseFulfillmentsItemExceptionsItemStatus: string
{
    case Open = "open";
    case Acknowledged = "acknowledged";
    case Resolved = "resolved";
}
