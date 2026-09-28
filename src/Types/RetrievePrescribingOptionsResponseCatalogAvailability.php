<?php

namespace Affinity\Types;

enum RetrievePrescribingOptionsResponseCatalogAvailability: string
{
    case Available = "available";
    case Backordered = "backordered";
    case Unavailable = "unavailable";
    case Unknown = "unknown";
}
