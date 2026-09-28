<?php

namespace Affinity\Types;

enum RetrievePrescribingOptionsResponseCatalogCompositionStatus: string
{
    case Complete = "complete";
    case Partial = "partial";
    case Unresolved = "unresolved";
}
