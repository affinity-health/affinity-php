<?php

namespace Affinity\Team\Members\Types;

enum ListMembersRequestStatus: string
{
    case Active = "active";
    case Disabled = "disabled";
}
