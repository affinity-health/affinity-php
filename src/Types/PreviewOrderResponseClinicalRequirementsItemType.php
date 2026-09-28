<?php

namespace Affinity\Types;

enum PreviewOrderResponseClinicalRequirementsItemType: string
{
    case AllergyReview = "allergy_review";
    case MedicationReview = "medication_review";
    case DiagnosisReview = "diagnosis_review";
    case Diagnosis = "diagnosis";
}
