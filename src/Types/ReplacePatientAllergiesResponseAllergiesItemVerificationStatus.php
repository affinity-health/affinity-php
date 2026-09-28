<?php

namespace Affinity\Types;

enum ReplacePatientAllergiesResponseAllergiesItemVerificationStatus: string
{
    case Unconfirmed = "unconfirmed";
    case Presumed = "presumed";
    case Confirmed = "confirmed";
}
