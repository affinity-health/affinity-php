<?php

namespace Affinity\Team\Prescribers\Types;

enum UpdatePracticeTeamPrescriberRequestPracticeStatus: string
{
    case Active = "active";
    case Inactive = "inactive";
}
