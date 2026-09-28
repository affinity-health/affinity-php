<?php

namespace Affinity\Patients\Types;

enum ListPatientsRequestStatus: string
{
    case Active = "active";
    case Inactive = "inactive";
}
