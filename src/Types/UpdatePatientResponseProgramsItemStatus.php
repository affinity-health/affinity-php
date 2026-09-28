<?php

namespace Affinity\Types;

enum UpdatePatientResponseProgramsItemStatus: string
{
    case Active = "active";
    case Completed = "completed";
    case Paused = "paused";
}
