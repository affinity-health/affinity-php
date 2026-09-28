<?php

namespace Affinity\Types;

enum SignAndSubmitOrderResponsePrescriptionsItemStatus: string
{
    case Submitted = "submitted";
    case Failed = "failed";
}
