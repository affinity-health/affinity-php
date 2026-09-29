<?php

namespace Affinity\Orders\TestSimulation\Types;

enum UpdateOrderTestSimulationRequestMode: string
{
    case Automatic = "automatic";
    case Manual = "manual";
}
