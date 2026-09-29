<?php

namespace Affinity\Team\Invitations\Types;

enum ListInvitationsRequestStatus: string
{
    case Accepted = "accepted";
    case Declined = "declined";
    case Pending = "pending";
    case Expired = "expired";
    case Revoked = "revoked";
}
