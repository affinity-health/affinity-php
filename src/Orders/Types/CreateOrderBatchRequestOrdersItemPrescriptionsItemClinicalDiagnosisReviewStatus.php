<?php

namespace Affinity\Orders\Types;

enum CreateOrderBatchRequestOrdersItemPrescriptionsItemClinicalDiagnosisReviewStatus: string
{
    case NotReviewed = "not_reviewed";
    case None = "none";
    case Recorded = "recorded";
}
