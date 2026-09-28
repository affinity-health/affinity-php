<?php

namespace Affinity\Types;

enum GetAccountResponseOperatingMode: string
{
    case Production = "production";
    case ProductionPending = "production_pending";
    case Sandbox = "sandbox";
    case Suspended = "suspended";
}
