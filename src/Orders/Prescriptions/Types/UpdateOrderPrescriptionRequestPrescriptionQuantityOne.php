<?php

namespace Affinity\Orders\Prescriptions\Types;

enum UpdateOrderPrescriptionRequestPrescriptionQuantityOne: string
{
    case Infinity = "Infinity";
    case NaN = "NaN";
}
