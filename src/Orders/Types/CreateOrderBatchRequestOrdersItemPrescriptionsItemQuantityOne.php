<?php

namespace Affinity\Orders\Types;

enum CreateOrderBatchRequestOrdersItemPrescriptionsItemQuantityOne: string
{
    case Infinity = "Infinity";
    case NaN = "NaN";
}
