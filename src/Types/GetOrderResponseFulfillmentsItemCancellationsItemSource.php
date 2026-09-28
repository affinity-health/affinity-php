<?php

namespace Affinity\Types;

enum GetOrderResponseFulfillmentsItemCancellationsItemSource: string
{
    case Provider = "provider";
    case Platform = "platform";
    case PublicApi = "public_api";
    case Pharmacy = "pharmacy";
    case System = "system";
}
