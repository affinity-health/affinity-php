<?php

namespace Affinity\Types;

enum RetrievePrescribingOptionsResponseCatalogOrderingShipping: string
{
    case Prescription = "prescription";
    case AccompanyingPrescription = "accompanying_prescription";
}
