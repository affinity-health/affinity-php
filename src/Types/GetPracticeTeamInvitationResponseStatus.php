<?php

namespace Affinity\Types;

enum GetPracticeTeamInvitationResponseStatus: string
{
    case Accepted = "accepted";
    case Declined = "declined";
    case Pending = "pending";
    case Expired = "expired";
    case Revoked = "revoked";
}
