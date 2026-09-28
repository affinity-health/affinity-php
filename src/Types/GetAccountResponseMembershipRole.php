<?php

namespace Affinity\Types;

enum GetAccountResponseMembershipRole: string
{
    case Administrator = "administrator";
    case ClinicalReviewer = "clinical_reviewer";
    case Developer = "developer";
    case Operations = "operations";
    case Owner = "owner";
    case Viewer = "viewer";
    case ServiceKey = "service_key";
}
