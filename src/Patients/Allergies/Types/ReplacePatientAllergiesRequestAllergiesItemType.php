<?php

namespace Affinity\Patients\Allergies\Types;

enum ReplacePatientAllergiesRequestAllergiesItemType: string
{
    case Allergy = "allergy";
    case Intolerance = "intolerance";
}
