<?php

namespace Affinity\Types;

enum ListOrdersResponseDataItemFulfillmentsItemShipmentsItemSource: string
{
    case PharmacyWebhook = "pharmacy_webhook";
    case Pharmacy = "pharmacy";
    case System = "system";
}
