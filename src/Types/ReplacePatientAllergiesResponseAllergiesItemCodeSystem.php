<?php

namespace Affinity\Types;

enum ReplacePatientAllergiesResponseAllergiesItemCodeSystem: string
{
    case Rxnorm = "rxnorm";
    case SnomedCt = "snomed-ct";
}
