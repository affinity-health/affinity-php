<?php

namespace Affinity\Types;

enum UpdatePracticeLocationResponseStatus: string
{
    case Active = "active";
    case Archived = "archived";
}
