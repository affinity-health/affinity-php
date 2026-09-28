<?php

namespace Affinity\Types;

enum PreviewOrderResponseOrderInputPrescriptionsItemClinicalMedicationReviewStatus: string
{
    case NotReviewed = "not_reviewed";
    case None = "none";
    case Recorded = "recorded";
}
