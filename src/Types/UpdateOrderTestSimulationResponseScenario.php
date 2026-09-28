<?php

namespace Affinity\Types;

enum UpdateOrderTestSimulationResponseScenario: string
{
    case Successful = "successful";
    case PharmacyRejection = "pharmacy_rejection";
    case CancellationDeclined = "cancellation_declined";
}
