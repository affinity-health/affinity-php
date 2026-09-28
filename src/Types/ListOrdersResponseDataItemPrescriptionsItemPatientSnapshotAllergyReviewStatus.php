<?php

namespace Affinity\Types;

enum ListOrdersResponseDataItemPrescriptionsItemPatientSnapshotAllergyReviewStatus: string
{
    case NoKnown = "no_known";
    case NotReviewed = "not_reviewed";
    case Recorded = "recorded";
}
