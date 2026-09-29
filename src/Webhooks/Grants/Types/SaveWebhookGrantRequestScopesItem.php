<?php

namespace Affinity\Webhooks\Grants\Types;

enum SaveWebhookGrantRequestScopesItem: string
{
    case WebhooksRead = "webhooks:read";
    case WebhooksWrite = "webhooks:write";
}
