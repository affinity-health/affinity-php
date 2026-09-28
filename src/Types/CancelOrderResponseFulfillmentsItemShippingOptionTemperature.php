<?php

namespace Affinity\Types;

enum CancelOrderResponseFulfillmentsItemShippingOptionTemperature: string
{
    case Ambient = "ambient";
    case Refrigerated = "refrigerated";
}
