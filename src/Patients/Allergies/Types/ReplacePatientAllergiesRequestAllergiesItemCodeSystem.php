<?php

namespace Affinity\Patients\Allergies\Types;

enum ReplacePatientAllergiesRequestAllergiesItemCodeSystem: string
{
    case Rxnorm = "rxnorm";
    case SnomedCt = "snomed-ct";
}
