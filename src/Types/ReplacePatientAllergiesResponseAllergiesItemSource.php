<?php

namespace Affinity\Types;

enum ReplacePatientAllergiesResponseAllergiesItemSource: string
{
    case Doctor = "Doctor";
    case Patient = "Patient";
    case PatientAgentGuardian = "Patient Agent/Guardian";
    case Pharmacist = "Pharmacist";
}
