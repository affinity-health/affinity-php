<?php

namespace Affinity\Types;

enum ListCatalogItemsResponseDataItemAvailability: string
{
    case Available = "available";
    case Backordered = "backordered";
    case Unavailable = "unavailable";
    case Unknown = "unknown";
}
