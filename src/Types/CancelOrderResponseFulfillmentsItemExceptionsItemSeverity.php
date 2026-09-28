<?php

namespace Affinity\Types;

enum CancelOrderResponseFulfillmentsItemExceptionsItemSeverity: string
{
    case Warning = "warning";
    case Critical = "critical";
}
