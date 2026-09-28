<?php

namespace Affinity\Types;

enum ListPatientsResponseDataItemProgramsItemStatus: string
{
    case Active = "active";
    case Completed = "completed";
    case Paused = "paused";
}
