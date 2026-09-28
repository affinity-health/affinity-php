<?php

namespace Affinity\Team\Types;

enum UpdatePracticeTeamPrescriberRequestPracticeStatus: string
{
    case Active = "active";
    case Inactive = "inactive";
}
