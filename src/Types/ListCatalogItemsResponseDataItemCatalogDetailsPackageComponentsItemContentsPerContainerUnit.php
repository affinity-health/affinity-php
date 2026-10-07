<?php

namespace Affinity\Types;

enum ListCatalogItemsResponseDataItemCatalogDetailsPackageComponentsItemContentsPerContainerUnit: string
{
    case Mg = "mg";
    case G = "g";
    case Ug = "ug";
    case ML = "mL";
    case L = "L";
    case Iu = "[IU]";
    case Tablet = "tablet";
    case Capsule = "capsule";
    case Troche = "troche";
    case Actuation = "actuation";
    case Patch = "patch";
    case Package = "package";
    case Container = "container";
}
