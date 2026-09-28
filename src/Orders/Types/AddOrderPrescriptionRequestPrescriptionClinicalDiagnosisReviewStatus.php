<?php

namespace Affinity\Orders\Types;

enum AddOrderPrescriptionRequestPrescriptionClinicalDiagnosisReviewStatus: string
{
    case NotReviewed = "not_reviewed";
    case None = "none";
    case Recorded = "recorded";
}
