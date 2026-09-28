<?php

namespace Affinity\Locations\Types;

enum ListPracticeLocationsRequestStatus: string
{
    case Active = "active";
    case Archived = "archived";
}
