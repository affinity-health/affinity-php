<?php

namespace Affinity\Catalog\Types;

enum ListCatalogItemsRequestDosageFormsOneItem: string
{
    case Capsule = "capsule";
    case Cream = "cream";
    case Gel = "gel";
    case Solution = "solution";
    case Spray = "spray";
    case Tablet = "tablet";
    case Troche = "troche";
    case Unknown = "unknown";
    case Vial = "vial";
}
