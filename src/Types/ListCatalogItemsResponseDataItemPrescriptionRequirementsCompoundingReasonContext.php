<?php

namespace Affinity\Types;

enum ListCatalogItemsResponseDataItemPrescriptionRequirementsCompoundingReasonContext: string
{
    case NotSupported = "not_supported";
    case Optional = "optional";
    case Required = "required";
}
