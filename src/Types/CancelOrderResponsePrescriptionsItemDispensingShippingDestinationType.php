<?php

namespace Affinity\Types;

enum CancelOrderResponsePrescriptionsItemDispensingShippingDestinationType: string
{
    case Patient = "patient";
    case Practice = "practice";
}
