<?php

namespace Affinity\Types;

enum ListOrdersResponseDataItemFulfillmentsItemCancellationsItemSource: string
{
    case Provider = "provider";
    case Platform = "platform";
    case PublicApi = "public_api";
    case Pharmacy = "pharmacy";
    case System = "system";
}
