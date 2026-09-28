<?php

namespace Affinity\Types;

enum GetPatientAllergiesResponseAllergiesItemType: string
{
    case Allergy = "allergy";
    case Intolerance = "intolerance";
}
