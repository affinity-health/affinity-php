<?php

namespace Affinity\Patients\Types;

enum ReplacePatientAllergiesRequestReviewStatus: string
{
    case NotReviewed = "not_reviewed";
    case NoKnown = "no_known";
    case Recorded = "recorded";
}
