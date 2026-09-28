<?php

namespace Affinity\Types;

enum RetrievePrescribingOptionsResponseDefaultSource: string
{
    case Affinity = "affinity";
    case Catalog = "catalog";
    case Pharmacy = "pharmacy";
}
