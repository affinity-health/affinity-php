<?php

namespace Affinity\Types;

enum CancelOrderResponsePrescriptionsItemClinicalDiagnosisReviewStatus: string
{
    case NotReviewed = "not_reviewed";
    case None = "none";
    case Recorded = "recorded";
}
