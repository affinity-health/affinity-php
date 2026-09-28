<?php

namespace Affinity\Types;

enum SignAndSubmitOrderResponseStatus: string
{
    case Submitted = "submitted";
    case PartiallySubmitted = "partially_submitted";
    case NotSubmitted = "not_submitted";
}
