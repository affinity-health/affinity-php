<?php

namespace Affinity\Orders\Types;

enum ActOnOrderExceptionRequestAction: string
{
    case Acknowledge = "acknowledge";
    case AssignToMe = "assign_to_me";
    case ContactPharmacy = "contact_pharmacy";
    case RecordOutcome = "record_outcome";
    case Resolve = "resolve";
    case Retry = "retry";
}
