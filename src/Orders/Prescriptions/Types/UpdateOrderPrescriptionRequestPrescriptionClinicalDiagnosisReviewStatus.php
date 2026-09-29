<?php

namespace Affinity\Orders\Prescriptions\Types;

enum UpdateOrderPrescriptionRequestPrescriptionClinicalDiagnosisReviewStatus: string
{
    case NotReviewed = "not_reviewed";
    case None = "none";
    case Recorded = "recorded";
}
