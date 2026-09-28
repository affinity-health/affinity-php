<?php

namespace Affinity\Types;

enum RetrievePrescribingOptionsResponseCompoundingReasonChoicesItemCategory: string
{
    case AlcoholFree = "alcohol_free";
    case DrugShortage = "drug_shortage";
    case CommercialProductDiscontinued = "commercial_product_discontinued";
    case ModifiedRelease = "modified_release";
    case InactiveIngredientSensitivity = "inactive_ingredient_sensitivity";
    case InactiveIngredientToxicity = "inactive_ingredient_toxicity";
    case ConcentrationAdjustment = "concentration_adjustment";
    case AlternateRoute = "alternate_route";
    case DosageFormUnavailable = "dosage_form_unavailable";
    case FlavorAdjustment = "flavor_adjustment";
    case TabletBurden = "tablet_burden";
    case PatientCannotUseCommercialProduct = "patient_cannot_use_commercial_product";
    case NoApprovedProductAvailable = "no_approved_product_available";
    case NoRationaleRequired = "no_rationale_required";
    case OtherPatientSpecificNeed = "other_patient_specific_need";
}
