<?php

namespace Affinity\Types;

enum CancelOrderResponseFulfillmentsItemShipmentsItemSource: string
{
    case PharmacyWebhook = "pharmacy_webhook";
    case Pharmacy = "pharmacy";
    case System = "system";
}
