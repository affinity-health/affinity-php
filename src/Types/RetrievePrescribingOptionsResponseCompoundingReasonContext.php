<?php

namespace Affinity\Types;

enum RetrievePrescribingOptionsResponseCompoundingReasonContext: string
{
    case NotSupported = "not_supported";
    case Optional = "optional";
    case Required = "required";
}
