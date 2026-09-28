<?php

namespace Affinity\Types;

enum GetPatientResponseLocationStatus: string
{
    case Active = "active";
    case Archived = "archived";
}
