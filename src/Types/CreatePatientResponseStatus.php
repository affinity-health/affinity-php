<?php

namespace Affinity\Types;

enum CreatePatientResponseStatus: string
{
    case Active = "active";
    case Inactive = "inactive";
}
