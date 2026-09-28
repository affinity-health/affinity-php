<?php

namespace Affinity\Types;

enum GetPatientResponseProgramsItemStatus: string
{
    case Active = "active";
    case Completed = "completed";
    case Paused = "paused";
}
