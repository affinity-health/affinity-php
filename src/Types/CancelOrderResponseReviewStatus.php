<?php

namespace Affinity\Types;

enum CancelOrderResponseReviewStatus: string
{
    case Completed = "completed";
    case Rejected = "rejected";
}
