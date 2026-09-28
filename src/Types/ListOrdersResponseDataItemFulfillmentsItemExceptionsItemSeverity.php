<?php

namespace Affinity\Types;

enum ListOrdersResponseDataItemFulfillmentsItemExceptionsItemSeverity: string
{
    case Warning = "warning";
    case Critical = "critical";
}
