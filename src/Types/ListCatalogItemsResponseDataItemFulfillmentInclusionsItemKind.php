<?php

namespace Affinity\Types;

enum ListCatalogItemsResponseDataItemFulfillmentInclusionsItemKind: string
{
    case ColdChain = "cold_chain";
    case InjectionSupplies = "injection_supplies";
}
