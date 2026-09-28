<?php

namespace Affinity\Types;

enum CreateOrderBatchResponseOrdersItemPrescriptionsItemStatus: string
{
    case RequiresProviderSignature = "requires_provider_signature";
}
