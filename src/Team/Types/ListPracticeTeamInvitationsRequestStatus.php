<?php

namespace Affinity\Team\Types;

enum ListPracticeTeamInvitationsRequestStatus: string
{
    case Accepted = "accepted";
    case Declined = "declined";
    case Pending = "pending";
    case Expired = "expired";
    case Revoked = "revoked";
}
