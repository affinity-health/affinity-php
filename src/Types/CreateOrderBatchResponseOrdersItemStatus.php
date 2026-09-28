<?php

namespace Affinity\Types;

enum CreateOrderBatchResponseOrdersItemStatus: string
{
    case RequiresProviderSignature = "requires_provider_signature";
}
