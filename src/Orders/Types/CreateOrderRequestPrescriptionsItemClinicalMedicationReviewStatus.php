<?php

namespace Affinity\Orders\Types;

enum CreateOrderRequestPrescriptionsItemClinicalMedicationReviewStatus: string
{
    case NotReviewed = "not_reviewed";
    case None = "none";
    case Recorded = "recorded";
}
