<?php

namespace Affinity\Types;

enum ListOrdersResponseDataItemPrescriptionsItemClinicalMedicationReviewStatus: string
{
    case NotReviewed = "not_reviewed";
    case None = "none";
    case Recorded = "recorded";
}
