<?php

namespace Affinity\Types;

enum ListOrdersResponseDataItemLifecycleEventsItemSource: string
{
    case Cancellation = "cancellation";
    case Exception = "exception";
    case Fulfillment = "fulfillment";
    case Integration = "integration";
    case Shipment = "shipment";
    case Webhook = "webhook";
}
