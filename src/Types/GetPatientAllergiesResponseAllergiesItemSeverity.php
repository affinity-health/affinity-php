<?php

namespace Affinity\Types;

enum GetPatientAllergiesResponseAllergiesItemSeverity: string
{
    case Mild = "mild";
    case Moderate = "moderate";
    case Severe = "severe";
    case Unknown = "unknown";
}
