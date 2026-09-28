<?php

namespace Affinity\Types;

enum RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsRefills: string
{
    case NotSupported = "not_supported";
    case Optional = "optional";
}
