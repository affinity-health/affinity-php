<?php

namespace Affinity\Types;

enum ListOrdersResponseDataItemPrescriptionsItemDispensingShippingDestinationType: string
{
    case Patient = "patient";
    case Practice = "practice";
}
