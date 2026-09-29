<?php

namespace Affinity\Orders\Batches\Types;

enum CreateOrderBatchRequestOrdersItemPrescriptionsItemClinicalMedicationReviewStatus: string
{
    case NotReviewed = "not_reviewed";
    case None = "none";
    case Recorded = "recorded";
}
