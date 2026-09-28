<?php

namespace Affinity\Types;

enum PreviewOrderResponseStatus: string
{
    case Complete = "complete";
    case Incomplete = "incomplete";
}
