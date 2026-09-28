<?php

namespace Affinity\Types;

enum UpdatePatientResponseLocationStatus: string
{
    case Active = "active";
    case Archived = "archived";
}
