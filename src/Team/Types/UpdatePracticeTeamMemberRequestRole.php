<?php

namespace Affinity\Team\Types;

enum UpdatePracticeTeamMemberRequestRole: string
{
    case Owner = "owner";
    case Administrator = "administrator";
    case Prescriber = "prescriber";
    case ClinicalStaff = "clinical_staff";
    case Billing = "billing";
    case Developer = "developer";
}
