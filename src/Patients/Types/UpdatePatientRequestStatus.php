<?php

namespace Affinity\Patients\Types;

enum UpdatePatientRequestStatus: string
{
    case Active = "active";
    case Inactive = "inactive";
}
