<?php

namespace Affinity\Team\Types;

enum ListPracticeTeamPrescribersRequestStatus: string
{
    case Active = "active";
    case Inactive = "inactive";
}
