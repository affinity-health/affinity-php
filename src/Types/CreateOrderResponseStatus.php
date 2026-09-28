<?php

namespace Affinity\Types;

enum CreateOrderResponseStatus: string
{
    case RequiresProviderSignature = "requires_provider_signature";
}
