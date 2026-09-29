<?php

namespace Affinity\Team\Members\Types;

enum UpdatePracticeTeamMemberRequestStatus: string
{
    case Active = "active";
    case Disabled = "disabled";
}
