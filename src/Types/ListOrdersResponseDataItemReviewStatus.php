<?php

namespace Affinity\Types;

enum ListOrdersResponseDataItemReviewStatus: string
{
    case Completed = "completed";
    case Rejected = "rejected";
}
