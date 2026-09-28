<?php

namespace Affinity\Types;

enum GetPatientAllergiesResponseAllergiesItemVerificationStatus: string
{
    case Unconfirmed = "unconfirmed";
    case Presumed = "presumed";
    case Confirmed = "confirmed";
}
