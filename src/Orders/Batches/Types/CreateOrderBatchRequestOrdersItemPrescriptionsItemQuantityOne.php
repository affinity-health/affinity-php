<?php

namespace Affinity\Orders\Batches\Types;

enum CreateOrderBatchRequestOrdersItemPrescriptionsItemQuantityOne: string
{
    case NaN = "NaN";
    case Infinity = "Infinity";
}
