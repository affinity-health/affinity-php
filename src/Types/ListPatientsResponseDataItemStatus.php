<?php

namespace Affinity\Types;

enum ListPatientsResponseDataItemStatus: string
{
    case Active = "active";
    case Inactive = "inactive";
}
