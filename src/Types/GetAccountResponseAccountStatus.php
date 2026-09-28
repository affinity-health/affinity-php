<?php

namespace Affinity\Types;

enum GetAccountResponseAccountStatus: string
{
    case Active = "active";
    case Pending = "pending";
    case Suspended = "suspended";
}
