<?php

namespace Affinity\Locations\Types;

enum ListLocationsRequestStatus: string
{
    case Active = "active";
    case Archived = "archived";
}
