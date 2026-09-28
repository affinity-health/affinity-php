<?php

namespace Affinity\Patients\Types;

enum CreatePatientRequestProgramsItemStatus: string
{
    case Active = "active";
    case Completed = "completed";
    case Paused = "paused";
}
