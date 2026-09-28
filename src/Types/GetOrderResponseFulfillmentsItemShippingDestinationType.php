<?php

namespace Affinity\Types;

enum GetOrderResponseFulfillmentsItemShippingDestinationType: string
{
    case Patient = "patient";
    case Practice = "practice";
}
