<?php

namespace Affinity\Types;

enum GetOrderResponseFulfillmentsItemShipmentsItemStatus: string
{
    case LabelCreated = "label_created";
    case CarrierPossession = "carrier_possession";
    case InTransit = "in_transit";
    case OutForDelivery = "out_for_delivery";
    case Delivered = "delivered";
    case Delayed = "delayed";
    case DeliveryFailed = "delivery_failed";
    case Returned = "returned";
    case Voided = "voided";
    case Unknown = "unknown";
}
