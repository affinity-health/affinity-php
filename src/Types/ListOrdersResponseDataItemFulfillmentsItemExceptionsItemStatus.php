<?php

namespace Affinity\Types;

enum ListOrdersResponseDataItemFulfillmentsItemExceptionsItemStatus: string
{
    case Open = "open";
    case Acknowledged = "acknowledged";
    case Resolved = "resolved";
}
