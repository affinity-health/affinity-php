<?php

namespace Affinity\Orders\Prescriptions\Types;

enum AddOrderPrescriptionRequestPrescriptionClinicalDiagnosisReviewStatus: string
{
    case NotReviewed = "not_reviewed";
    case None = "none";
    case Recorded = "recorded";
}
