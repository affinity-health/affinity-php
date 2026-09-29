<?php

namespace Affinity\Catalog\Items\Types;

enum ListItemsRequestCatalogKind: string
{
    case Prescription = "prescription";
    case Otc = "otc";
}
