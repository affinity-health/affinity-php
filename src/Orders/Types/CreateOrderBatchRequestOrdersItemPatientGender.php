<?php

namespace Affinity\Orders\Types;

enum CreateOrderBatchRequestOrdersItemPatientGender: string
{
    case F = "f";
    case M = "m";
    case O = "o";
    case U = "u";
}
