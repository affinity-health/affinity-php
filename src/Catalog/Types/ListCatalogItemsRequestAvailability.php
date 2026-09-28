<?php

namespace Affinity\Catalog\Types;

enum ListCatalogItemsRequestAvailability: string
{
    case All = "all";
    case Orderable = "orderable";
    case Unavailable = "unavailable";
}
