<?php

namespace Affinity\Orders\Types;

enum AddOrderPrescriptionRequestPrescriptionClinicalMedicationReviewStatus: string
{
    case NotReviewed = "not_reviewed";
    case None = "none";
    case Recorded = "recorded";
}
