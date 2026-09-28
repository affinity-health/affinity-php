<?php

namespace Affinity\Types;

enum GetPatientResponseStatus: string
{
    case Active = "active";
    case Inactive = "inactive";
}
