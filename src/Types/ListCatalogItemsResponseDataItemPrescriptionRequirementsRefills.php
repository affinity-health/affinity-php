<?php

namespace Affinity\Types;

enum ListCatalogItemsResponseDataItemPrescriptionRequirementsRefills: string
{
    case NotSupported = "not_supported";
    case Optional = "optional";
}
