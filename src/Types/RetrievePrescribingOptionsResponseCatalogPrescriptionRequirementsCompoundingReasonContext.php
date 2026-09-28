<?php

namespace Affinity\Types;

enum RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsCompoundingReasonContext: string
{
    case NotSupported = "not_supported";
    case Optional = "optional";
    case Required = "required";
}
