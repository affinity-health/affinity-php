<?php

namespace Affinity\Types;

enum GetOrderResponseFulfillmentsItemShipmentsItemSource: string
{
    case PharmacyWebhook = "pharmacy_webhook";
    case Pharmacy = "pharmacy";
    case System = "system";
}
