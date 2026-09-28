<?php

namespace Affinity\Types;

enum GetPatientResponseAllergyReviewStatus: string
{
    case NotReviewed = "not_reviewed";
    case NoKnown = "no_known";
    case Recorded = "recorded";
}
