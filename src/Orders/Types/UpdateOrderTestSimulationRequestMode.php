<?php

namespace Affinity\Orders\Types;

enum UpdateOrderTestSimulationRequestMode: string
{
    case Automatic = "automatic";
    case Manual = "manual";
}
