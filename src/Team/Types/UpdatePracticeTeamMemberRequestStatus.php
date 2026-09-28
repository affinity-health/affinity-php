<?php

namespace Affinity\Team\Types;

enum UpdatePracticeTeamMemberRequestStatus: string
{
    case Active = "active";
    case Disabled = "disabled";
}
