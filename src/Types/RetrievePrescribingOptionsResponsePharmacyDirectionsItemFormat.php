<?php

namespace Affinity\Types;

enum RetrievePrescribingOptionsResponsePharmacyDirectionsItemFormat: string
{
    case FreeText = "free_text";
    case Structured = "structured";
}
