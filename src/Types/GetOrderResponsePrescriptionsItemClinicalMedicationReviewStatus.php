<?php

namespace Affinity\Types;

enum GetOrderResponsePrescriptionsItemClinicalMedicationReviewStatus: string
{
    case NotReviewed = "not_reviewed";
    case None = "none";
    case Recorded = "recorded";
}
