<?php

namespace Affinity\Types;

enum CreatePatientResponseProgramsItemStatus: string
{
    case Active = "active";
    case Completed = "completed";
    case Paused = "paused";
}
