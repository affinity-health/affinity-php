<?php

namespace Affinity\Patients\Types;

enum ListPatientAddressesRequestStatus: string
{
    case Active = "active";
    case Archived = "archived";
    case All = "all";
}
