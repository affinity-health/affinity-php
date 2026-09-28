<?php

namespace Affinity\Types;

enum ListPharmaciesResponseDataItemShippingOptionsItemDestinationTypesItem: string
{
    case Patient = "patient";
    case Practice = "practice";
}
