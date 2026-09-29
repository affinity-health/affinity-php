<?php

namespace Affinity\Patients\Allergies\Types;

enum ReplacePatientAllergiesRequestAllergiesItemVerificationStatus: string
{
    case Unconfirmed = "unconfirmed";
    case Presumed = "presumed";
    case Confirmed = "confirmed";
}
