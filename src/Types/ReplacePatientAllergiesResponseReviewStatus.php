<?php

namespace Affinity\Types;

enum ReplacePatientAllergiesResponseReviewStatus: string
{
    case NotReviewed = "not_reviewed";
    case NoKnown = "no_known";
    case Recorded = "recorded";
}
