<?php

namespace Affinity\Orders\Types;

enum PreviewOrderRequestPrescriptionsItemOverridesClinicalDiagnosisReviewStatus: string
{
    case NotReviewed = "not_reviewed";
    case None = "none";
    case Recorded = "recorded";
}
