<?php

namespace Affinity\Orders\Types;

enum AddOrderPrescriptionRequestPrescriptionQuantityOne: string
{
    case Infinity = "Infinity";
    case NaN = "NaN";
}
