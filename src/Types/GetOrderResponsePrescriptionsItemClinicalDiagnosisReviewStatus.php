<?php

namespace Affinity\Types;

enum GetOrderResponsePrescriptionsItemClinicalDiagnosisReviewStatus: string
{
    case NotReviewed = "not_reviewed";
    case None = "none";
    case Recorded = "recorded";
}
