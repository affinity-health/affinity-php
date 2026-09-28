<?php

namespace Affinity\Orders\Types;

enum PreviewOrderRequestPrescriptionsItemOverridesClinicalMedicationReviewStatus: string
{
    case NotReviewed = "not_reviewed";
    case None = "none";
    case Recorded = "recorded";
}
