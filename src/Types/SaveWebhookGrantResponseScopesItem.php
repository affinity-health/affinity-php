<?php

namespace Affinity\Types;

enum SaveWebhookGrantResponseScopesItem: string
{
    case WebhooksRead = "webhooks:read";
    case WebhooksWrite = "webhooks:write";
}
