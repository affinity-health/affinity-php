<?php

namespace Affinity\Types;

enum ListPharmaciesResponseDataItemAccess: string
{
    case Invited = "invited";
    case Network = "network";
}
