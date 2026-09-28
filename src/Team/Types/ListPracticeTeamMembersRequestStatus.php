<?php

namespace Affinity\Team\Types;

enum ListPracticeTeamMembersRequestStatus: string
{
    case Active = "active";
    case Disabled = "disabled";
}
