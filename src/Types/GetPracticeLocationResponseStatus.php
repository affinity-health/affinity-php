<?php

namespace Affinity\Types;

enum GetPracticeLocationResponseStatus: string
{
    case Active = "active";
    case Archived = "archived";
}
