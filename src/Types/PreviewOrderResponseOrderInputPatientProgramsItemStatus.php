<?php

namespace Affinity\Types;

enum PreviewOrderResponseOrderInputPatientProgramsItemStatus: string
{
    case Active = "active";
    case Completed = "completed";
    case Paused = "paused";
}
