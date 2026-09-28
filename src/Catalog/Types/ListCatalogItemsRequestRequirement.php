<?php

namespace Affinity\Catalog\Types;

enum ListCatalogItemsRequestRequirement: string
{
    case All = "all";
    case OfficeUse = "office_use";
    case PatientSpecific = "patient_specific";
}
