<?php

namespace Affinity\Orders\TestSimulation\Types;

enum UpdateOrderTestSimulationRequestAction: string
{
    case Accept = "accept";
    case Process = "process";
    case Ship = "ship";
    case Deliver = "deliver";
    case Reject = "reject";
    case ConfirmCancellation = "confirm_cancellation";
    case DeclineCancellation = "decline_cancellation";
}
