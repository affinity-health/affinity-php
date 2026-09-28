<?php

namespace Affinity\Types;

enum CancelOrderResponseFulfillmentsItemShippingMethod: string
{
    case Standard = "standard";
    case Expedited = "expedited";
    case Overnight = "overnight";
    case Pickup = "pickup";
    case LocalDelivery = "local_delivery";
}
