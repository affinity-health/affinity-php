<?php

namespace Affinity\Patients\Allergies\Types;

enum ReplacePatientAllergiesRequestAllergiesItemSeverity: string
{
    case Mild = "mild";
    case Moderate = "moderate";
    case Severe = "severe";
    case Unknown = "unknown";
}
