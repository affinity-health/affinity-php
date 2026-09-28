<?php

namespace Affinity\Types;

enum RevokePracticeTeamInvitationResponseStatus: string
{
    case Accepted = "accepted";
    case Declined = "declined";
    case Pending = "pending";
    case Expired = "expired";
    case Revoked = "revoked";
}
