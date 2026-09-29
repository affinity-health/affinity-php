<?php

namespace Affinity\Orders\Batches\Types;

enum CreateOrderBatchRequestOrdersItemPrescriptionsItemQuantityOne: string
{
    case Infinity = "Infinity";
    case NaN = "NaN";
}
