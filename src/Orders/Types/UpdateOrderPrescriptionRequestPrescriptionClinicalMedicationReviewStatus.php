<?php

namespace Affinity\Orders\Types;

enum UpdateOrderPrescriptionRequestPrescriptionClinicalMedicationReviewStatus: string
{
    case NotReviewed = "not_reviewed";
    case None = "none";
    case Recorded = "recorded";
}
