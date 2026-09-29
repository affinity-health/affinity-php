<?php

namespace Affinity\Catalog\Items\Types;

enum ListItemsRequestAvailability: string
{
    case All = "all";
    case Orderable = "orderable";
    case Unavailable = "unavailable";
}
