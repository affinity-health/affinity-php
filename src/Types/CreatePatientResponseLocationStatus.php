<?php

namespace Affinity\Types;

enum CreatePatientResponseLocationStatus: string
{
    case Active = "active";
    case Archived = "archived";
}
