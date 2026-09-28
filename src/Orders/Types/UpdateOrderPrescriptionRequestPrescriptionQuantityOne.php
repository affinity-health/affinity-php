<?php

namespace Affinity\Orders\Types;

enum UpdateOrderPrescriptionRequestPrescriptionQuantityOne: string
{
    case Infinity = "Infinity";
    case NaN = "NaN";
}
