<?php

namespace Affinity\Types;

enum GetPatientAllergiesResponseAllergiesItemCodeSystem: string
{
    case Rxnorm = "rxnorm";
    case SnomedCt = "snomed-ct";
}
