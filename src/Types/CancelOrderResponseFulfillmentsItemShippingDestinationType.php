<?php

namespace Affinity\Types;

enum CancelOrderResponseFulfillmentsItemShippingDestinationType: string
{
    case Patient = "patient";
    case Practice = "practice";
}
