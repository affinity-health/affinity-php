<?php

namespace Affinity\Catalog\Types;

enum ListShippingOptionsRequestDestinationType: string
{
    case Patient = "patient";
    case Practice = "practice";
}
