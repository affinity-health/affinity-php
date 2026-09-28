<?php

namespace Affinity\Catalog\Types;

enum ListCatalogItemsRequestRoutesZero: string
{
    case Injectable = "injectable";
    case Nasal = "nasal";
    case Oral = "oral";
    case Sublingual = "sublingual";
    case Topical = "topical";
    case Unknown = "unknown";
}
