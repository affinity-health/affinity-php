<?php

namespace Affinity\Types;

enum CreatePracticeLocationResponseStatus: string
{
    case Active = "active";
    case Archived = "archived";
}
