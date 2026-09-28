<?php

namespace Affinity\Types;

enum PreviewOrderResponseClinicalRequirementsItemStatus: string
{
    case Missing = "missing";
    case Satisfied = "satisfied";
}
