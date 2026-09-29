<?php

namespace Affinity\Orders\Batches\Types;

enum CreateOrderBatchRequestOrdersItemPrescriptionsItemDispensingShippingDestinationType: string
{
    case Patient = "patient";
}
