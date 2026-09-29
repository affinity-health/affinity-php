<?php

namespace Affinity\Patients\Allergies\Types;

enum ReplacePatientAllergiesRequestAllergiesItemSource: string
{
    case Doctor = "Doctor";
    case Patient = "Patient";
    case PatientAgentGuardian = "Patient Agent/Guardian";
    case Pharmacist = "Pharmacist";
}
