<?php

namespace Affinity\Orders\Types;

enum CreateOrderRequestPatientProgramsItemStatus: string
{
    case Active = "active";
    case Completed = "completed";
    case Paused = "paused";
}
