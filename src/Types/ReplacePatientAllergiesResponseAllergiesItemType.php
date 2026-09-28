<?php

namespace Affinity\Types;

enum ReplacePatientAllergiesResponseAllergiesItemType: string
{
    case Allergy = "allergy";
    case Intolerance = "intolerance";
}
