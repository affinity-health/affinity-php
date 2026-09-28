<?php

namespace Affinity\Orders\Types;

enum CreateOrderBatchRequestOrdersItemPrescriptionsItemDispensingShippingDestinationType: string
{
    case Patient = "patient";
}
