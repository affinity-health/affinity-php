<?php

namespace Affinity\Catalog\Types;

enum ListCatalogItemsRequestCatalogKind: string
{
    case Prescription = "prescription";
    case Otc = "otc";
}
