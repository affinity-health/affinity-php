<?php

namespace Affinity\Types;

enum ListOrdersResponseDataItemFulfillmentsItemShippingDestinationType: string
{
    case Patient = "patient";
    case Practice = "practice";
}
