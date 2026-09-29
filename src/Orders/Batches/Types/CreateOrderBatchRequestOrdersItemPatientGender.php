<?php

namespace Affinity\Orders\Batches\Types;

enum CreateOrderBatchRequestOrdersItemPatientGender: string
{
    case F = "f";
    case M = "m";
    case O = "o";
    case U = "u";
}
