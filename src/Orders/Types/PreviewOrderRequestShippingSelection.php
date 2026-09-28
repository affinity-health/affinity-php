<?php

namespace Affinity\Orders\Types;

enum PreviewOrderRequestShippingSelection: string
{
    case Manual = "manual";
    case LowestCost = "lowest_cost";
    case Fastest = "fastest";
}
