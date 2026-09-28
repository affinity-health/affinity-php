<?php

namespace Affinity\Patients\Types;

enum ReplacePatientAllergiesRequestAllergiesItemType: string
{
    case Allergy = "allergy";
    case Intolerance = "intolerance";
}
