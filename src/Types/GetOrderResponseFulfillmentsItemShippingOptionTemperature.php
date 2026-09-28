<?php

namespace Affinity\Types;

enum GetOrderResponseFulfillmentsItemShippingOptionTemperature: string
{
    case Ambient = "ambient";
    case Refrigerated = "refrigerated";
}
