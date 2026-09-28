<?php

namespace Affinity\Types;

enum GetOrderResponsePrescriptionsItemDispensingShippingDestinationType: string
{
    case Patient = "patient";
    case Practice = "practice";
}
