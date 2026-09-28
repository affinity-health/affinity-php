<?php

namespace Affinity\Team\Types;

enum RegisterUserRequestRole: string
{
    case Administrator = "administrator";
    case Prescriber = "prescriber";
    case ClinicalStaff = "clinical_staff";
    case Billing = "billing";
    case Developer = "developer";
}
