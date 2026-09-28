<?php

namespace Affinity\Patients\Types;

enum ListPatientsRequestSort: string
{
    case Created = "created";
    case Name = "name";
}
