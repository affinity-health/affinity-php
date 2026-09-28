<?php

namespace Affinity\Orders\Types;

enum CreateOrderRequestPatientGender: string
{
    case F = "f";
    case M = "m";
    case O = "o";
    case U = "u";
}
