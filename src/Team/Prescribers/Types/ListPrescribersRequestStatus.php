<?php

namespace Affinity\Team\Prescribers\Types;

enum ListPrescribersRequestStatus: string
{
    case Active = "active";
    case Inactive = "inactive";
}
