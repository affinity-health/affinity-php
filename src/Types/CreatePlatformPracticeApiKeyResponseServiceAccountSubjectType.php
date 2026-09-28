<?php

namespace Affinity\Types;

enum CreatePlatformPracticeApiKeyResponseServiceAccountSubjectType: string
{
    case Practice = "practice";
    case InternalService = "internal_service";
    case Pharmacy = "pharmacy";
    case Platform = "platform";
    case User = "user";
}
