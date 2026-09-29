<?php

namespace Affinity\Catalog\ShippingOptions\Types;

enum ListShippingOptionsRequestDestinationType: string
{
    case Patient = "patient";
    case Practice = "practice";
}
