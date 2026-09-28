<?php

namespace Affinity\Catalog\Types;

enum ListCatalogItemsRequestView: string
{
    case Offers = "offers";
    case Medications = "medications";
}
