<?php

namespace Affinity\Patients\Addresses\Types;

enum ListAddressesRequestStatus: string
{
    case Active = "active";
    case Archived = "archived";
    case All = "all";
}
