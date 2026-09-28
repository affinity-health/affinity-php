<?php

namespace Affinity\Types;

enum RetrievePrescribingOptionsResponseOptionsDoseUnitsItemSource: string
{
    case Catalog = "catalog";
    case Pharmacy = "pharmacy";
    case Rxnorm = "rxnorm";
}
