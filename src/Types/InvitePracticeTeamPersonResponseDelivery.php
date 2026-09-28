<?php

namespace Affinity\Types;

enum InvitePracticeTeamPersonResponseDelivery: string
{
    case Sent = "sent";
    case AlreadyAccepted = "already_accepted";
}
