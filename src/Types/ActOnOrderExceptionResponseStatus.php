<?php

namespace Affinity\Types;

enum ActOnOrderExceptionResponseStatus: string
{
    case Open = "open";
    case Acknowledged = "acknowledged";
    case Resolved = "resolved";
}
