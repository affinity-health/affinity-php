<?php

namespace Affinity\Catalog\Items\Types;

enum ListItemsRequestSort: string
{
    case Relevance = "relevance";
    case NameAsc = "name_asc";
    case NameDesc = "name_desc";
}
