<?php

namespace Affinity\Types;

enum GetOrderResponseFulfillmentsItemExceptionsItemSeverity: string
{
    case Warning = "warning";
    case Critical = "critical";
}
