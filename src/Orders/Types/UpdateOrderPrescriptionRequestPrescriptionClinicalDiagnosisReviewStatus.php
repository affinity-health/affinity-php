<?php

namespace Affinity\Orders\Types;

enum UpdateOrderPrescriptionRequestPrescriptionClinicalDiagnosisReviewStatus: string
{
    case NotReviewed = "not_reviewed";
    case None = "none";
    case Recorded = "recorded";
}
