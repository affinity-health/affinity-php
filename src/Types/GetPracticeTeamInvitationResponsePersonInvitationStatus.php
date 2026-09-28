<?php

namespace Affinity\Types;

enum GetPracticeTeamInvitationResponsePersonInvitationStatus: string
{
    case Accepted = "accepted";
    case Declined = "declined";
    case Pending = "pending";
    case Expired = "expired";
    case Revoked = "revoked";
}
