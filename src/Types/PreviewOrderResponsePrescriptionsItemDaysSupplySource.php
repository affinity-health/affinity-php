<?php

namespace Affinity\Types;

enum PreviewOrderResponsePrescriptionsItemDaysSupplySource: string
{
    case Manual = "manual";
    case Calculated = "calculated";
    case Preset = "preset";
    case Missing = "missing";
}
