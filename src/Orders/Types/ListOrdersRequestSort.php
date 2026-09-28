<?php

namespace Affinity\Orders\Types;

enum ListOrdersRequestSort: string
{
    case Newest = "newest";
    case Oldest = "oldest";
}
