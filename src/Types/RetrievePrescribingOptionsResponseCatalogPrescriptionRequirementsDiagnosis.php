<?php

namespace Affinity\Types;

enum RetrievePrescribingOptionsResponseCatalogPrescriptionRequirementsDiagnosis: string
{
    case NotRequired = "not_required";
    case Optional = "optional";
    case Required = "required";
}
