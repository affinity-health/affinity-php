<?php

namespace Affinity\Patients\Types;

enum UpdatePatientRequestProgramsItemStatus: string
{
    case Active = "active";
    case Completed = "completed";
    case Paused = "paused";
}
