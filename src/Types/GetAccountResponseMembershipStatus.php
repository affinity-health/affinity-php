<?php

namespace Affinity\Types;

enum GetAccountResponseMembershipStatus: string
{
    case Active = "active";
    case Disabled = "disabled";
    case Invited = "invited";
}
