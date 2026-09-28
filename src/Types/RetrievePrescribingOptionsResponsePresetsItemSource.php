<?php

namespace Affinity\Types;

enum RetrievePrescribingOptionsResponsePresetsItemSource: string
{
    case Affinity = "affinity";
    case Pharmacy = "pharmacy";
    case Catalog = "catalog";
}
