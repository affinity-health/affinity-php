<?php

namespace Affinity\Catalog\Items\Types;

enum ListItemsRequestView: string
{
    case Offers = "offers";
    case Medications = "medications";
}
