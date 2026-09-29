<?php

namespace Affinity\Orders\Prescriptions\Types;

enum AddOrderPrescriptionRequestPrescriptionQuantityOne: string
{
    case Infinity = "Infinity";
    case NaN = "NaN";
}
