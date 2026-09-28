<?php

namespace Affinity\Types;

enum PreviewOrderResponsePrescriptionsItemFormat: string
{
    case Structured = "structured";
    case FreeText = "free_text";
}
