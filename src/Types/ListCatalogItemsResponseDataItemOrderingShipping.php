<?php

namespace Affinity\Types;

enum ListCatalogItemsResponseDataItemOrderingShipping: string
{
    case Prescription = "prescription";
    case AccompanyingPrescription = "accompanying_prescription";
}
