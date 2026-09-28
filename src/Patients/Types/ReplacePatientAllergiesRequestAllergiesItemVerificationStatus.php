<?php

namespace Affinity\Patients\Types;

enum ReplacePatientAllergiesRequestAllergiesItemVerificationStatus: string
{
    case Unconfirmed = "unconfirmed";
    case Presumed = "presumed";
    case Confirmed = "confirmed";
}
