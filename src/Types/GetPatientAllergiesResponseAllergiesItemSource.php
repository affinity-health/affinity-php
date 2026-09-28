<?php

namespace Affinity\Types;

enum GetPatientAllergiesResponseAllergiesItemSource: string
{
    case Doctor = "Doctor";
    case Patient = "Patient";
    case PatientAgentGuardian = "Patient Agent/Guardian";
    case Pharmacist = "Pharmacist";
}
