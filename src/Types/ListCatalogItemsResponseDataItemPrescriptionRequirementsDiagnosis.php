<?php

namespace Affinity\Types;

enum ListCatalogItemsResponseDataItemPrescriptionRequirementsDiagnosis: string
{
    case NotRequired = "not_required";
    case Optional = "optional";
    case Required = "required";
}
