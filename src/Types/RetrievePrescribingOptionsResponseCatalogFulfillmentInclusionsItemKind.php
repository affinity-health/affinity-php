<?php

namespace Affinity\Types;

enum RetrievePrescribingOptionsResponseCatalogFulfillmentInclusionsItemKind: string
{
    case ColdChain = "cold_chain";
    case InjectionSupplies = "injection_supplies";
}
