<?php

namespace Affinity\Orders\Types;

enum CreateOrderRequestPrescriptionsItemClinicalDiagnosisReviewStatus: string
{
    case NotReviewed = "not_reviewed";
    case None = "none";
    case Recorded = "recorded";
}
