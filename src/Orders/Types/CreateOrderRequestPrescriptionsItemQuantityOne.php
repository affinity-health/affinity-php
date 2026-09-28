<?php

namespace Affinity\Orders\Types;

enum CreateOrderRequestPrescriptionsItemQuantityOne: string
{
    case Infinity = "Infinity";
    case NaN = "NaN";
}
