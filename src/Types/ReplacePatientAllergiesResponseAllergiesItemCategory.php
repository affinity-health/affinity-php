<?php

namespace Affinity\Types;

enum ReplacePatientAllergiesResponseAllergiesItemCategory: string
{
    case Drug = "drug";
    case Food = "food";
    case Insect = "insect";
    case Latex = "latex";
    case Mold = "mold";
    case Pet = "pet";
    case Pollen = "pollen";
    case Environmental = "environmental";
    case Biologic = "biologic";
    case Other = "other";
}
