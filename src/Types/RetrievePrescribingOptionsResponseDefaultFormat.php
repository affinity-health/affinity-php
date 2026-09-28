<?php

namespace Affinity\Types;

enum RetrievePrescribingOptionsResponseDefaultFormat: string
{
    case FreeText = "free_text";
    case Structured = "structured";
}
