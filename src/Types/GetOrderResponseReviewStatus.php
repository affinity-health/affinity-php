<?php

namespace Affinity\Types;

enum GetOrderResponseReviewStatus: string
{
    case Completed = "completed";
    case Rejected = "rejected";
}
