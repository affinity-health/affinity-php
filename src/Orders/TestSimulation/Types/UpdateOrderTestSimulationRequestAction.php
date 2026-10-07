<?php

namespace Affinity\Orders\TestSimulation\Types;

enum UpdateOrderTestSimulationRequestAction: string
{
    case Ship = "ship";
    case Deliver = "deliver";
    case Accept = "accept";
    case Process = "process";
    case Reject = "reject";
    case ConfirmCancellation = "confirm_cancellation";
    case DeclineCancellation = "decline_cancellation";
}
