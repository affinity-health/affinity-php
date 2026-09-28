<?php

namespace Affinity\Types;

enum ListPatientsResponseDataItemLocationStatus: string
{
    case Active = "active";
    case Archived = "archived";
}
