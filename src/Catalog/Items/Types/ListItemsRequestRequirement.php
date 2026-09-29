<?php

namespace Affinity\Catalog\Items\Types;

enum ListItemsRequestRequirement: string
{
    case All = "all";
    case OfficeUse = "office_use";
    case PatientSpecific = "patient_specific";
}
