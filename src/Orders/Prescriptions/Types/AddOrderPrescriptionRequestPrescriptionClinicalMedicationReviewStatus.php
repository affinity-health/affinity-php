<?php

namespace Affinity\Orders\Prescriptions\Types;

enum AddOrderPrescriptionRequestPrescriptionClinicalMedicationReviewStatus: string
{
    case NotReviewed = "not_reviewed";
    case None = "none";
    case Recorded = "recorded";
}
