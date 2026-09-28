<?php

namespace Affinity\Types;

enum ListWebhookGrantsResponseDataItemScopesItem: string
{
    case WebhooksRead = "webhooks:read";
    case WebhooksWrite = "webhooks:write";
}
