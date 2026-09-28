<?php

namespace Affinity\Orders\Types;

enum CreateOrderBatchRequestOrdersItemPrescriptionsItemClinicalMedicationReviewStatus: string
{
    case NotReviewed = "not_reviewed";
    case None = "none";
    case Recorded = "recorded";
}
