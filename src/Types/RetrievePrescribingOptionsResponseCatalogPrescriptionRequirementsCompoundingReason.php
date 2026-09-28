<?php

namespace Affinity\Types;

enum RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsCompoundingReason: string
{
    case NotRequired = "not_required";
    case Optional = "optional";
    case Required = "required";
}
