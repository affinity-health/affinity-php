<?php

namespace Affinity\Orders\Types;

enum PreviewOrderRequestPatientProgramsItemStatus: string
{
    case Active = "active";
    case Completed = "completed";
    case Paused = "paused";
}
