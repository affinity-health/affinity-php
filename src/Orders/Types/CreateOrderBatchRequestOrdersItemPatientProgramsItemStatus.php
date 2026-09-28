<?php

namespace Affinity\Orders\Types;

enum CreateOrderBatchRequestOrdersItemPatientProgramsItemStatus: string
{
    case Active = "active";
    case Completed = "completed";
    case Paused = "paused";
}
