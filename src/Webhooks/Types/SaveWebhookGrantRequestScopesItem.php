<?php

namespace Affinity\Webhooks\Types;

enum SaveWebhookGrantRequestScopesItem: string
{
    case WebhooksRead = "webhooks:read";
    case WebhooksWrite = "webhooks:write";
}
