<?php

namespace Affinity\Types;

enum ListCatalogItemsResponseDataItemCompositionStatus: string
{
    case Complete = "complete";
    case Partial = "partial";
    case Unresolved = "unresolved";
}
