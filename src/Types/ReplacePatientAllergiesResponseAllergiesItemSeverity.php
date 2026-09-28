<?php

namespace Affinity\Types;

enum ReplacePatientAllergiesResponseAllergiesItemSeverity: string
{
    case Mild = "mild";
    case Moderate = "moderate";
    case Severe = "severe";
    case Unknown = "unknown";
}
