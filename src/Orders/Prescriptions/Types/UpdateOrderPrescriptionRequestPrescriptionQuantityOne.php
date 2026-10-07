<?php

namespace Affinity\Orders\Prescriptions\Types;

enum UpdateOrderPrescriptionRequestPrescriptionQuantityOne: string
{
    case NaN = "NaN";
    case Infinity = "Infinity";
}
