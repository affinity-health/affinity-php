<?php

namespace Affinity\Types;

enum RetrievePrescribingOptionsResponseOptionsRoutesItemSource: string
{
    case Catalog = "catalog";
    case Pharmacy = "pharmacy";
    case Rxnorm = "rxnorm";
}
