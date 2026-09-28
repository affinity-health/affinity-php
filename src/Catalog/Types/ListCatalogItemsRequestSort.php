<?php

namespace Affinity\Catalog\Types;

enum ListCatalogItemsRequestSort: string
{
    case Relevance = "relevance";
    case NameAsc = "name_asc";
    case NameDesc = "name_desc";
}
