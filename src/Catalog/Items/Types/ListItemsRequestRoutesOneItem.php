<?php

namespace Affinity\Catalog\Items\Types;

enum ListItemsRequestRoutesOneItem: string
{
    case Injectable = "injectable";
    case Nasal = "nasal";
    case Oral = "oral";
    case Sublingual = "sublingual";
    case Topical = "topical";
    case Unknown = "unknown";
}
