<?php

namespace Affinity\Types;

enum UpdatePatientResponseStatus: string
{
    case Active = "active";
    case Inactive = "inactive";
}
