<?php

namespace Affinity\Types;

enum RetrievePrescribingOptionsResponseFormulationDefaultFormat: string
{
    case FreeText = "free_text";
    case Structured = "structured";
}
