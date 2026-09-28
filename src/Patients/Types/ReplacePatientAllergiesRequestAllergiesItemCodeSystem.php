<?php

namespace Affinity\Patients\Types;

enum ReplacePatientAllergiesRequestAllergiesItemCodeSystem: string
{
    case Rxnorm = "rxnorm";
    case SnomedCt = "snomed-ct";
}
