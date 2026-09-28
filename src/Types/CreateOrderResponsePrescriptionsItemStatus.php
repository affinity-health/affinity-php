<?php

namespace Affinity\Types;

enum CreateOrderResponsePrescriptionsItemStatus: string
{
    case RequiresProviderSignature = "requires_provider_signature";
}
