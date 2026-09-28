<?php

namespace Affinity\Orders\Types;

enum UpdateOrderTestSimulationRequestScenario: string
{
    case Successful = "successful";
    case PharmacyRejection = "pharmacy_rejection";
    case CancellationDeclined = "cancellation_declined";
}
