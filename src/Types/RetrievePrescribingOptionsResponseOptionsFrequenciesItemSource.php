<?php

namespace Affinity\Types;

enum RetrievePrescribingOptionsResponseOptionsFrequenciesItemSource: string
{
    case Catalog = "catalog";
    case Pharmacy = "pharmacy";
    case Rxnorm = "rxnorm";
}
