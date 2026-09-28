<?php

namespace Affinity\Types;

enum RetrievePrescribingOptionsResponseOptionsDosesItemSource: string
{
    case Catalog = "catalog";
    case Pharmacy = "pharmacy";
    case Rxnorm = "rxnorm";
}
