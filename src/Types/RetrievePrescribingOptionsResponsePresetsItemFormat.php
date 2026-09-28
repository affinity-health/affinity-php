<?php

namespace Affinity\Types;

enum RetrievePrescribingOptionsResponsePresetsItemFormat: string
{
    case Structured = "structured";
    case FreeText = "free_text";
}
