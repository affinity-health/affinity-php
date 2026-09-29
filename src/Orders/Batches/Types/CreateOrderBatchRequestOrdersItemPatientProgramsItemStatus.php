<?php

namespace Affinity\Orders\Batches\Types;

enum CreateOrderBatchRequestOrdersItemPatientProgramsItemStatus: string
{
    case Active = "active";
    case Completed = "completed";
    case Paused = "paused";
}
