<?php

namespace Affinity\Types;

enum GetOrderTestSimulationResponseScenario: string
{
    case Successful = "successful";
    case PharmacyRejection = "pharmacy_rejection";
    case CancellationDeclined = "cancellation_declined";
}
