<?php

namespace Affinity\Types;

enum ListCatalogItemsResponseDataItemPrescriptionRequirementsCompoundingReason: string
{
    case NotRequired = "not_required";
    case Optional = "optional";
    case Required = "required";
}
